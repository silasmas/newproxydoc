<?php

namespace App\Http\Controllers;

use Rules\Password;
use App\Models\User;
use App\Models\achat;
use App\Models\order;
use App\Models\commune;
use App\Mail\notifyAchat;
use App\Models\livraison;
use App\Rules\PhoneNumber;
use App\Models\produitUser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdateachatRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\AbonnementController;

class AchatController extends Controller
{

    public function deletePriceLivraison($commune)
    {
        Session::forget('priceLivraison');
        Session::forget('communeLivraison');
        $v = Session::get('priceLivraison', '0');
        return response()->json(['reponse' => true, 'msg' => "Frais de livraison retranché", 'val' => Cart::total() + $v, "pl" => $v]);
    }
    public function getPriceLivraison($commune)
    {

        $com = commune::where("nom", $commune)->first();

        // dd($com->zone->montant);
        if ($com) {
            Session::put("priceLivraison", $com->zone->montant);
            Session::put("communeLivraison", $com->zone->montant);
            $v = Session::get('priceLivraison', '0');
            return response()->json(['reponse' => true, 'msg' => "Frais de livraison pris en compte", 'val' => Cart::total() + $v, "pl" => $v]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "La zone interdite pour la livraison"]);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function mesAchats()
    {
        return view('pages.mesAchats');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function confirmUserLivraison(Request $request)
    {
        $porduit=livraison::where([['transaction_id',$request->transaction_id],['produit_id',$request->produit_id],['etat','1']])->first();
        $pr=produitUser::find($request->p_id);

        if($porduit){
            return response()->json(['reponse' => false, 'msg' => "La livraison de ce produit est déjà confirmé"]);
        }else{
            $prod=livraison::where([['transaction_id',$request->transaction_id],['produit_id',$request->produit_id]])->first();
            if($prod){
                $prod->etat="1";
                $prod->save();
                $pr->livraison="2";
                $pr->save();
                return response()->json(['reponse' => true, 'msg' => "Merci de confirmé votre livraison et de nous faire confiance"]);
            }else{
               return response()->json(['reponse' => false, 'msg' => "Erreur de confirmation"]);

           }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreachatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $achat = new AbonnementController();
        if (!Auth::guest()) {
            $transaction_id =genererTransaction_id(Auth::user()->id);
            // dd($transaction_id);
            $verification = verivyInfo_paiement($request);
            $user = Auth::user();
            if ($verification) {
                $init = initInfo($request, $transaction_id);
                return $ret = initPaie($init, $request->toArray(), $user);
            }
        } else {
            $compteExiste = verifyCompte($request->email);
            //dd($compteExiste);
            if ($compteExiste[0] == true) {
                if ($compteExiste[1] == true) {
                    return back()->with('message', 'Cet email a déjà un compte merci de vous connecté pour continuer le paiement');
                } else {
                    $request->validate([
                        'name' => ['required', 'string', 'max:255'],
                        'prenom' => ['required', 'string', 'max:255'],
                        'telephone' => ['required', new PhoneNumber],
                        'email' => ['required', 'string', 'email', 'max:255'],
                        'password' => ['required', 'confirmed', Rules\Password::defaults()],
                    ]);
                    $user = User::where("email", $request->email)->first();
                    $transaction_id =genererTransaction_id($user->id);
                    $verification = verivyInfo_paiement($request);
                    if ($verification) {
                        $init = initInfo($request, $transaction_id);
                        return $ret = initPaie($init, $request->toArray(), $user);
                    }
                }
            } else {

                $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'prenom' => ['required', 'string', 'max:255'],
                    'telephone' => ['required', new PhoneNumber, 'unique:users'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'confirmed', Rules\Password::defaults()],
                ]);
                //ici on crée le compte du user
                $user = User::create([
                    'name' => $request->name,
                    'prenom' => $request->prenom,
                    'telephone' => $request->telephone,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
                if ($user) {
                    $transaction_id =genererTransaction_id($user->id);
                    $verification =verivyInfo_paiement($request);
                    if ($verification) {
                        $init =initInfo($request, $transaction_id);
                        return $ret =initPaie($init, $request->toArray(), $user);
                    }
                } else {
                    return back()->with('message', 'Erreur de création de compte!');
                }
            }
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod=produitUser::find($id);
        if($prod->livraison!='0'){
            $order=order::where([['produits',$prod->produit_id],['transaction_id',$prod->transaction_id]])->first();
            $livraison=livraison::where([['user_id',$prod->user_id],['transaction_id',$prod->transaction_id]])->first();
            return view('pages.detailProduitAcheter',compact('order','livraison','prod'));
        }else{
            $order=order::where([['produits',$prod->produit_id],['transaction_id',$prod->transaction_id]])->first();
        //    dd($prod->produit);
            return view('pages.detailProduitAcheter',compact('order','prod'));
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function edit(achat $achat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateachatRequest  $request
     * @param  \App\Models\achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateachatRequest $request, achat $achat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function destroy(achat $achat)
    {
        //
    }

    public function notify(Request $request)
    {
        $retour = produitUser::where("transaction_id", $request->cpm_trans_id)->get();
        $paiement = order::where("transaction_id", $request->cpm_trans_id)->get();
        /**
         * composition de la variable reponse, c'est une concatenation de montant+monaie+
         * signature+telephone+prefix du pay+la langue+la version+la configuration+l'action
         * * */
        $reponse = $request->cpm_amount . "/" . $request->cpm_currency . "/" . $request->signature . "/" . $request->cel_phone_num . "/" .
            $request->cpm_phone_prefixe . "/" . $request->cpm_language . "/" . $request->cpm_version . "/" . $request->cpm_payment_config . "/" . $request->cpm_page_action;

        if ($retour) {
            $response_body = verifyStatus($request->cpm_trans_id);
            if ((int)$response_body["code"] === 00 && $response_body["message"] == "SUCCES") {
                foreach($retour as $ret){
                    $ret->etat = 'Payer';
                    $ret->updated_at = $request->cpm_trans_date;
                    $ret->save();
                }
                foreach($paiement as $p){

                    $p->updated_at = $request->cpm_trans_date;
                    $p->reponse = $reponse;

                    $p->type = $response_body['code'];
                    $p->moyenPaiement = $response_body['data']['payment_method'];
                    $p->message = $response_body['message'];
                    $p->reference = $response_body['data']['status'];
                    $p->save();
                }

                //ici je notifi le client par mail
                $user = User::find($retour->user_id);
                Mail::to($user->email)->send(new notifyAchat($user, 'success', "Achat produit réussi"));


                return dd($response_body['data']['status']);
            } else {
                foreach($retour as $ret){
                $ret->etat =  $response_body['data']['status'];
                $ret->updated_at = $request->cpm_trans_date;
                $ret->save();
            }

            foreach($paiement as $p){
                $p->updated_at = $request->cpm_trans_date;
                $p->reponse = $reponse;
                $p->moyenPaiement = $response_body['data']['payment_method'];
                $p->message = $response_body['message'];
                $p->type = $response_body['code'];
                $p->reference = $response_body['data']['status'];
                $p->save();
            }
                $data = $response_body;
                $message = message($response_body);
                //ici je notifi le client par mail
                $msg = $message['message'];
                $user = User::find($retour->user_id);
                Mail::to($user->email)->send(new notifyAchat($user, $msg, "Achat produit échouer"));


                return dd($response_body['data']['status']);
            }
        } else {
            return dd($retour);
        }
    }


    public function retour(Request $request)
    {
        // dd($request->transaction_id);
        $retour = produitUser::where("transaction_id", $request->transaction_id)->first();
        $paiement = order::where("transaction_id", $request->transaction_id)->first();
       // $ab = abonnement::with("service")->where("id", $retour->abonnement_id)->first();
        if ($retour) {
            $response_body = verifyStatus($request->transaction_id);
            // dd($response_body);
            if ((int)$response_body["code"] === 00 && $response_body["message"] == "SUCCES") {
                $data = $response_body;
                $message = ["message" => "Achat fait avec succès", "status" => "Réussi"];
                $login = verifyLogin($request->transaction_id);
                $message = ["message" => "Achat fait avec succès", "status" => "Réussi"];

                //ici je notifi le client par mail
                $user = User::find($retour->user_id);
                Mail::to($user->email)->send(new notifyAchat($user, 'success', "Achat produit réussi"));

                return view('pages.notifyProduit', compact('data', "message"));
            } else {
                $data = $response_body;
                $login =verifyLogin($request->transaction_id);
                $message = message($response_body);

                //ici je notifi le client par mail
                $msg = $message['message'];
                $user = User::find($retour->user_id);
                Mail::to($user->email)->send(new notifyAchat($user, $msg, "Achat produit échouer"));

                return view('pages.notifyProduit', compact('data', "message"));
            }
        } else {

            $response_body = verifyStatus($request);
            $data = $response_body;
            $etat = "Erreur d'enregistrement";
            $message = message($response_body);

            //ici je notifi le client par mail
            $user = User::find($retour->user_id);
            Mail::to($user->email)->send(new notifyAchat($user, $message, "Achat produit échouer"));

            return view('pages.notifyProduit', compact('data', "message"));
        }
    }
}
