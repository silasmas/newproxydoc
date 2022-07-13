<?php

namespace App\Http\Controllers;

use Rules\Password;
use App\Models\User;
use App\Models\achat;
use App\Rules\PhoneNumber;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateachatRequest;
use App\Http\Controllers\AbonnementController;

class AchatController extends Controller
{
    public $achat = new AbonnementController();
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreachatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::guest()) {
            $transaction_id = $this->achat->genererTransaction_id(Auth::user()->id);
            $verification = $this->achat->verivyInfo_paiement($request);
            $user = Auth::user();
            if ($verification) {
                $init = $this->achat->initInfo($request, $transaction_id);

                // dd($init);
                return $ret = $this->achat->initPaie($init, $request->toArray(), $user);
            }
        } else {
            $compteExiste = $this->achat->verifyCompte($request->email);
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
                    $transaction_id = $this->achat->genererTransaction_id($user->id);
                    $verification = $this->achat->verivyInfo_paiement($request);
                    if ($verification) {
                        $init = $this->achat->initInfo($request, $transaction_id);
                        return $ret = $this->achat->initPaie($init, $request->toArray(), $user);
                    }
                }
            } else {
                $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'prenom' => ['required', 'string', 'max:255'],
                    'telephone' => ['required', new PhoneNumber, 'unique:users'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'confirmed', Password::defaults()],
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
                    $transaction_id = $this->achat->genererTransaction_id($user->id);
                    $verification = $this->achat->verivyInfo_paiement($request);
                    if ($verification) {
                        $init = $this->achat->initInfo($request, $transaction_id);
                        return $ret = $this->achat->initPaie($init, $request->toArray(), $user);
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
    public function show(achat $achat)
    {
        //
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
}
