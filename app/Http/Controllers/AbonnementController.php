<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\User;
use App\Models\service;
use App\Models\paiement;
use App\Models\abonnement;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use App\Mail\notifyAbonnement;
use App\Models\abonnementUser;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UpdateabonnementRequest;

class AbonnementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $rep=self::verifyStatus("8.ZabjB4FDNL");
        // dd($rep);
        return view('pages.abonnement');
    }
    public function detail()
    {
        $services = service::with("acte")->get();
        //dd($services);
        return view('pages.detailAbonnement', compact('services'));
    }
    public function docteur()
    {
        return view('pages.docteurs');
    }
    public function detailDocteur()
    {
        return view('pages.detailDocteur');
    }




    public function notify(Request $request)
    {
        $retour = abonnementUser::where("transaction_id", $request->cpm_trans_id)->first();
        $paiement = paiement::where("transaction_id", $request->cpm_trans_id)->first();
        /**
         * composition de la variable reponse, c'est une concatenation de montant+monaie+
         * signature+telephone+prefix du pay+la langue+la version+la configuration+l'action
         * * */
        $reponse = $request->cpm_amount . "/" . $request->cpm_currency . "/" . $request->signature . "/" . $request->cel_phone_num . "/" .
            $request->cpm_phone_prefixe . "/" . $request->cpm_language . "/" . $request->cpm_version . "/" . $request->cpm_payment_config . "/" . $request->cpm_page_action;

        if ($retour) {
            $response_body = verifyStatus($request->cpm_trans_id);
            if ((int)$response_body["code"] === 00 && $response_body["message"] == "SUCCES") {
                $delait = self::delait($retour->abonnement_id);
                $retour->etat = 'Payer';
                $retour->updated_at = $request->cpm_trans_date;
                $retour->date_debut = $delait[0]->isoFormat("YYYY-MM-DD H:M:S");
                $retour->date_fin = $delait[1]->isoFormat("YYYY-MM-DD H:M:S");
                $retour->save();

                $paiement->updated_at = $request->cpm_trans_date;
                $paiement->reponse = $reponse;

                $paiement->type = $response_body['code'];
                $paiement->moyenPaiement = $response_body['data']['payment_method'];
                $paiement->message = $response_body['message'];
                $paiement->reference = $response_body['data']['status'];
                $paiement->save();
                // $compte = self::activeCompte($request->cpm_trans_id);

                //ici je notifi le client par mail
                $user = User::find($retour->user_id);
                Mail::to($user->email)->send(new notifyAbonnement($user, 'success', "Paiement abonnement réussi"));


                return dd($response_body['data']['status']);
            } else {
                $retour->etat =  $response_body['data']['status'];
                $retour->updated_at = $request->cpm_trans_date;
                $retour->save();

                $paiement->updated_at = $request->cpm_trans_date;
                $paiement->reponse = $reponse;
                $paiement->moyenPaiement = $response_body['data']['payment_method'];
                $paiement->message = $response_body['message'];
                $paiement->type = $response_body['code'];
                $paiement->reference = $response_body['data']['status'];
                $paiement->save();
                $data = $response_body;
                $message = message($response_body);
                //ici je notifi le client par mail
                $msg = $message['message'];
                $user = User::find($retour->user_id);
                Mail::to($user->email)->send(new notifyAbonnement($user, $msg, "Paiement abonnement échouer"));


                return dd($response_body['data']['status']);
            }
        } else {
            return dd($retour);
        }
    }


    public function retour(Request $request)
    {
        $retour = abonnementUser::where("transaction_id", $request->transaction_id)->first();
        $paiement = paiement::where("transaction_id", $request->transaction_id)->first();
        $ab = abonnement::with("service")->where("id", $retour->abonnement_id)->first();
        if ($retour) {
            $response_body = verifyStatus($request->transaction_id);
            // dd($response_body);
            if ((int)$response_body["code"] === 00 && $response_body["message"] == "SUCCES") {
                $data = $response_body;
                $message = ["message" => "Paiement fait avec succès", "status" => "Réussi"];
                $login = verifyLogin($request->transaction_id);
                $message = ["message" => "Paiement fait avec succès", "status" => "Réussi"];

                //ici je notifi le client par mail
                $user = User::find($retour->user_id);
                Mail::to($user->email)->send(new notifyAbonnement($user, 'success', "Paiement abonnement réussi"));

                return view('pages.notify', compact('data', "message", "ab"));
            } else {
                $data = $response_body;
                $login =verifyLogin($request->transaction_id);
                $message = message($response_body);

                //ici je notifi le client par mail
                $msg = $message['message'];
                $user = User::find($retour->user_id);
                Mail::to($user->email)->send(new notifyAbonnement($user, $msg, "Paiement abonnement échouer retour"));

                return view('pages.notify', compact('data', "message", "ab"));
            }
        } else {

            $response_body = verifyStatus($request);
            $data = $response_body;
            $etat = "Erreur d'enregistrement";
            $message = message($response_body);

            //ici je notifi le client par mail
            $user = User::find($retour->user_id);
            Mail::to($user->email)->send(new notifyAbonnement($user, $message, "Paiement abonnement échouer retour"));

            return view('pages.notify', compact('data', "message", "ab"));
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function initinfo_paiement()
    {
    }
 


    public function initInfo($request, $transaction_id)
    {
        $description = abonnement::find($request->abonnement_id);
        // dd($description);
        if ($request->channels == "MOBILE_MONEY") {
            $cinetpay_data =  [
                "amount" => $request->prix,
                "currency" => $request->monaie,
                "apikey" => env("CINETPAY_APIKEY"),
                "site_id" => env("CINETPAY_SERVICD_ID"),
                "transaction_id" => $transaction_id,
                "description" => "Achat abonnement " . $description->nom,
                "return_url" => env("RETURN_URL"),
                "notify_url" => env("NOTIFY_URL"),
                'channels' => $request["channels"],
            ];
            return $cinetpay_data;
        } else {
            $cinetpay_data =  [
                "amount" => $request->prix,
                "currency" => $request->monaie,
                "apikey" => env("CINETPAY_APIKEY"),
                "site_id" => env("CINETPAY_SERVICD_ID"),
                "transaction_id" => $transaction_id,
                "description" => "Achat abonnement " . $description->nom,
                "return_url" => env("RETURN_URL"),
                "notify_url" => env("NOTIFY_URL"),
                'channels' => $request["channels"],
                'customer_name' => isset($request->name) && $request->name != "" ? $request->name : Auth::user()->name,
                'customer_city' => $request["customer_city"],
                'customer_email' => isset($request->email) && $request->email != "" ? $request->email : Auth::user()->email,
                'customer_surname' => isset($request->prenom) && $request->prenom != "" ? $request->prenom : Auth::user()->prenom,
                'customer_address' => $request["customer_address"],
                'customer_country' => $request["customer_country"],
                'customer_zip_code' => $request["customer_zip_code"],
                'customer_phone_number' => isset($request->telephone) && $request->telephone != "" ? $request->telephone : Auth::user()->telephone,
                'customer_state' => $request["customer_state"],
            ];
            return $cinetpay_data;
        }
    }
    public function initPaie($cinetpay_data, $request, $user)
    {
        $existe = abonnementUser::where([["user_id", $user->id], ["abonnement_id", $request['abonnement_id']], ["etat", "Payer"]])->first();
        //dd($existe);
        if ($existe) {
            return back()->with('message', "Vous êtes déjà abonner à ce boucker, pour le verifier allez dans la page MON COMPTE->MES ABONNEMENTS");
        } else {
            $url = 'https://api-checkout.cinetpay.com/v2/payment';
            $response = Http::asJson()->post($url, $cinetpay_data);

            $response_body = json_decode($response->body(), JSON_THROW_ON_ERROR | true, 512, JSON_THROW_ON_ERROR);
            if ($response->status() === 200) {

                $register = abonnementUser::updateOrCreate([
                    "abonnement_id" => $request['abonnement_id'],
                    "user_id" => $user->id,
                ], [
                    "transaction_id" => $cinetpay_data['transaction_id'],
                    'etat' => "En attente",
                ]);
                $paiementInfo = paiement::updateOrCreate([
                    "transaction_id" => $request['abonnement_id'],
                    "user_id" => $user->id,
                ], [
                    "transaction_id" => $cinetpay_data['transaction_id'],
                    "description" => $cinetpay_data['description'],
                    "token" => $response_body["data"]["payment_token"],
                    'customer_address' => $request["customer_address"],
                    'customer_city' => $request["customer_city"],
                    'operateur' => $request["channels"],
                    'customer_country' => $request["customer_country"],
                    'customer_state' => $request["customer_state"],
                    'customer_zip_code' => $request["customer_zip_code"],
                ]);

                if ($register && $paiementInfo) {
                    if ((int)$response_body["code"] === 201) {
                        $payment_link = $response_body["data"]["payment_url"];
                        return  Redirect::to($payment_link);
                    } else {
                        return back()->with('message', $response_body['description']);
                        // return response()->json(['reponse' => false, 'bank' => true, 'msg' => $response_body['description']]);
                    }
                } else {
                    return back()->with('message', "Erreur d'enregistrement!");
                    //return response()->json(['reponse' => false, 'bank' => true, 'msg' => "Erreur d'enregistrement!"]);
                }
            } else {
                return back()->with('message', $response_body['description']);
                // return response()->json(['reponse' => false, 'bank' => true, 'msg' => $response_body['description']]);
            }
        }
    }
    /**
     * on verifi si celui qui veux s'abonner a un compte si oui on le crée
     *et puis on passe au paiement sinon on passe directement au paiement
     *
     * @param  \App\Http\Requests\StoreabonnementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (!Auth::guest()) {
            $transaction_id = genererTransaction_id(Auth::user()->id);
            $verification = verivyInfo_paiement($request);
            $user = Auth::user();
            if ($verification) {
                $init = self::initInfo($request, $transaction_id);

                // dd($init);
                return $ret = self::initPaie($init, $request->toArray(), $user);
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
                    $transaction_id = genererTransaction_id($user->id);
                    $verification = verivyInfo_paiement($request);
                    if ($verification) {
                        $init = self::initInfo($request, $transaction_id);
                        return $ret = self::initPaie($init, $request->toArray(), $user);
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
                    $transaction_id = genererTransaction_id($user->id);
                    $verification = verivyInfo_paiement($request);
                    if ($verification) {
                        $init = self::initInfo($request, $transaction_id);
                        return $ret = self::initPaie($init, $request->toArray(), $user);
                    }
                } else {
                    return back()->with('message', 'Erreur de création de compte!');
                }
            }
        }
    }

    public function delait($id)
    {
        $ab = abonnement::find($id);
        $delais = [];
        if ($ab->temps == 'Ans') {
            $dd = Carbon::now();
            $df = Carbon::now()->addYears((int)$ab->duree);
            $delais = [$dd, $df];
            return $delais;
        } else {
            $dd = Carbon::now();
            $df = Carbon::now()->addMonth((int)$ab->duree);
            $delais = [$dd, $df];
            return $delais;
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\abonnement  $abonnement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $abonnement= $abonnement=abonnement::with('service','service.acte')->joinRelationship('service')->where('abonnements.id',$id)->get();
        $a = abonnement::with('service', 'service.acte')->where('abonnements.id', $id)->first();
        $ab = abonnement::with('service')->where('id', $id)->first();
        $services = $ab->service;
        // dd($abonnement);
        // $delait = self::delait($id);
        // dd($delait[0]->isoFormat("YYYY-MM-DD H:M:S"));
        return view('pages.creeAbonnement', compact("services", "ab"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\abonnement  $abonnement
     * @return \Illuminate\Http\Response
     */
    public function edit(abonnement $abonnement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateabonnementRequest  $request
     * @param  \App\Models\abonnement  $abonnement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateabonnementRequest $request, abonnement $abonnement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\abonnement  $abonnement
     * @return \Illuminate\Http\Response
     */
    public function destroy(abonnement $abonnement)
    {
        //
    }
}
