<?php

use App\Models\User;
use App\Models\order;
use App\Models\livraison;
use App\Models\abonnement;
use App\Models\produitUser;
use Illuminate\Http\Request;
use App\Models\abonnementUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\produit;
use Illuminate\Support\Str;

/**
 * Cette fonction sert à verifier si l'utilisateur a un compte
 * avec son @email
 */
function verifyCompte($email)
{
    $rep = [];
    $u = User::where([["email", $email]])->first();
    if ($u) {
        if ($u->email_verified_at == null) {
            $rep = [true, false];
            return $rep;
        } else {
            $rep = [true, true];
            return $rep;
        }
    } else {
        $rep = [false, false];
        return $rep;
    }
}

/**
 *cette fonction sert à activé le compte d'un utilisateur
 *par son email
 */
function activeCompte($id)
{
    $verify = explode('.', $id);
    $i = $verify[0];
    $u = User::where("id", $i)->first();
    $u->email_verified_at = Carbon::now()->isoFormat("YYYY-MM-DD H:M:S");
    $u->save();

    if ($u) {
        event(new Registered($u));
        Auth::login($u);
        return true;
    } else {
        return false;
    }
}
/**
 * Cette fonction sert à verifier s"il y a une connexionest active sinon la créer
 */
function verifyLogin($id)
{
    $verify = explode('.', $id);
    $id = $verify[0];
    $u = User::where("id", $id)->first();
    // $u = User::where([["id", $id], ["email_verified_at", '<>', null]])->first();

    if ($u) {
        event(new Registered($u));
        Auth::login($u);
        return true;
    } else {
        return false;
    }
}

/**
 * Cette fonction sert à notifié si le paiement est fait ou pas
 */
function note()
{
    $response_body = verifyStatus("8.rQGbxK1qnt");
    $retour = abonnementUser::where("transaction_id", "8.jr59UZaOps")->first();
    $ab = abonnement::with("service")->where("id", $retour->abonnement_id)->first();
    //dd($ab);
    if ((int) $response_body["code"] === 00 && $response_body["message"] == "SUCCES") {
        $data = $response_body;
        // $login = self::verifyLogin($request->transaction_id);
        $message = ["message" => "Paiement fait avec succès", "status" => "Réussi"];
        return view('pages.notify', compact('data', "message", "ab"));
    } else {
        $data = $response_body;
        //$login = self::verifyLogin($request->transaction_id);
        $message = ["message" => "Paiement fait avec succès", "status" => "Réussi"];
        return view('pages.notify', compact('data', "message", "ab"));
    }
}
/**
 * Cette fonction sert à retourner le message d"erreur correspondant
 */
function message($body)
{
    $code = $body["code"];
    $reponse = array();
    switch ($code) {
        case '201':
            return $reponse = ["message" => "Paiement crée", "status" => "Créé"];
            break;
        case '600':
            return $reponse = ["message" => "Paiement échoué!", "status" => "échec"];
            break;
        case '602':
            return $reponse = ["message" => "Solde insuffisant", "status" => "échec"];
            break;
        case '603':
            return $reponse = ["message" => "Service indisponible", "status" => "échec"];
            break;
        case '604':
            return $reponse = ["message" => "Erreur du code OTP", "status" => "échec"];
            break;
        case '608':
            return $reponse = ["message" => "Les champs minimum requis n'est pas envoyer", "status" => "échec"];
            break;
        case '606':
            return $reponse = ["message" => "Erreur des configurations", "status" => "échec"];
            break;
        case '609':
            return $reponse = ["message" => "Erreur d'authenfication", "status" => "échec"];
            break;
        case '610':
            return $reponse = ["message" => "Erreur de méthode de paiement", "status" => "échec"];
            break;
        case '611':
            return $reponse = ["message" => "Erreur des type de montant", "status" => "échec"];
            break;
        case '612':
            return $reponse = ["message" => "Monaie non valide", "status" => "échec"];
            break;
        case '613':
            return $reponse = ["message" => "Identifiant du site non valide", "status" => "échec"];
            break;
        case '614':
            return $reponse = ["message" => "Format de date de transaction non valide", "status" => "échec"];
            break;
        case '615':
            return $reponse = ["message" => "Langue non valide", "status" => "échec"];
            break;
        case '616':
            return $reponse = ["message" => "Page d'action non valide", "status" => "échec"];
            break;
        case '617':
            return $reponse = ["message" => "Configuration de paiement non valide", "status" => "échec"];
            break;
        case '618':
            return $reponse = ["message" => "Version de API non valide", "status" => "échec"];
            break;
        case '619':
            return $reponse = ["message" => "La signature érronée", "status" => "échec"];
            break;
        case '620':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '621':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '622':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '623':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '624':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '625':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '626':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '627':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '628':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '635':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '636':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '637':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '641':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '642':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '662':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '663':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '664':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '804':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '807':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '808':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '809':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '810':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '811':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '812':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
        case '623':
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;

        default:
            return $reponse = ["message" => "Paiement crée", "status" => "échec"];
            break;
    }
}

/**
 * Cette fonction sert à verifier le status d'un paiement
 */
function verifyStatus($request)
{
    $url = 'https://api-checkout.cinetpay.com/v2/payment/check';
    $cinetpay_verify = [
        "apikey" => env("CINETPAY_APIKEY"),
        "site_id" => env("CINETPAY_SERVICD_ID"),
        "transaction_id" => $request,
    ];
    $response = Http::asJson()->post($url, $cinetpay_verify);
    $response_body = json_decode($response->body(), JSON_THROW_ON_ERROR | true, 512, JSON_THROW_ON_ERROR);

    return $response_body;
}

/**
 * cette fonction sert à renvoyer un élément de transaction aléatoire et unique
 */
function genererTransaction_id($id, $longueur = 10)
{
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $longueurMax = strlen($caracteres);
    $chaineAleatoire = '';
    for ($i = 0; $i < $longueur; $i++) {
        $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
    }
    $idHash = $id . "." . $chaineAleatoire;
    return $idHash;
}

/**
 * Cette methode sert à verifié si les informations envoyer sont bonnes
 */
function verivyInfo_paiement(Request $request)
{
    if ($request->channels == "CREDIT_CARD") {
        return $request->validate([
            // 'abonnement_id' => ['required'],
            // 'prix' => ['required'],
            // 'monaie' => ['required'],
            'customer_city' => ['required', 'string', 'max:255'],
            'customer_zip_code' => ['required', 'string', 'max:255'],
            'customer_address' => ['required', 'string', 'max:255'],
        ]);
    } else {
        return true;
    }
}

function initInfo($request, $transaction_id)
{
    $description = abonnement::find($request->abonnement_id);
    // dd($description);
    if ($request->channels == "MOBILE_MONEY") {
        $cinetpay_data = [
            "amount" => (int)Cart::total() + Session::get('priceLivraison', '0'),
            "currency" => "CDF",
            "apikey" => env("CINETPAY_APIKEY"),
            "site_id" => env("CINETPAY_SERVICD_ID"),
            "transaction_id" => $transaction_id,
            "description" => "Achat produit ",
            "return_url" => env("RETURN2_URL"),
            "notify_url" => env("NOTIFY2_URL"),
            'channels' => $request["channels"],
        ];
        return $cinetpay_data;
    } else {
        $cinetpay_data = [
            "amount" => Cart::total() + Session::get('priceLivraison', '0'),
            "currency" => "USD",
            "apikey" => env("CINETPAY_APIKEY"),
            "site_id" => env("CINETPAY_SERVICD_ID"),
            "transaction_id" => $transaction_id,
            "description" => "Achat produit",
            "return_url" => env("RETURN2_URL"),
            "notify_url" => env("NOTIFY2_URL"),
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
function initPaie($cinetpay_data, $request, $user)
{

    $url = 'https://api-checkout.cinetpay.com/v2/payment';
    $response = Http::asJson()->post($url, $cinetpay_data);

    $response_body = json_decode($response->body(), JSON_THROW_ON_ERROR | true, 512, JSON_THROW_ON_ERROR);
    if ($response->status() === 200) {

        foreach (Cart::content() as $p) {
            //dd(Session::get('priceLivraison', '0'));
            if (Session::get('priceLivraison', '0') > 0) {
                $paiementInfo = livraison::create([
                    "commune_id" => Session::get('communeLivraison', '0'),
                    "user_id" => $user->id,
                    "transaction_id" => $cinetpay_data['transaction_id'],
                    "produit_id" => $p->id,
                ]);
            }
            $register = produitUser::create([
                "produit_id" => $p->id,
                "user_id" => $user->id,
                "transaction_id" => $cinetpay_data['transaction_id'],
                "quantite" => $p->qty,
                'etat' => "En attente",
                'livraison' => Session::get('communeLivraison', '0') == '0' ? "0" : "1",
            ]);
            $paiementInfo = order::create([
                "produits" => $p->id,
                "user_id" => $user->id,
                "montant" => Cart::total() + Session::get('priceLivraison', '0'),
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
        }
        if ($register && $paiementInfo) {
            if ((int) $response_body["code"] === 201) {
                $payment_link = $response_body["data"]["payment_url"];
                return Redirect::to($payment_link);
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

function addToCard($idProd, $quantity = 1)
{

    $duplicata = Cart::search(function ($cartItem, $rowId) use ($idProd) {
        return $cartItem->id == $idProd;
    });
    dd($duplicata->first()->qty, $quantity);
    if ($duplicata->isNotEmpty() && $duplicata->first()->qty == $quantity) {
        return array(false, '');
    } else {
        if ($duplicata->isNotEmpty() && $duplicata->first()->qty != $quantity) {
            $produit = produit::find($idProd);
            Cart::add($produit->id, $produit->nom, $quantity, $produit->prix)
                ->associate("App\models\produit");
            return array(true, $produit->nom);
        } else {
            $produit = produit::find($idProd);
            Cart::add($produit->id, $produit->nom, $quantity, $produit->prix)
                ->associate("App\models\produit");

            return array(true, $produit->nom);
        }
    }
}
