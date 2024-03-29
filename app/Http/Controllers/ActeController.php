<?php

namespace App\Http\Controllers;

use App\Models\acte;
use App\Http\Requests\StoreacteRequest;
use App\Http\Requests\UpdateacteRequest;

class ActeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.client.pharmacie');
    }
    public function ordonance()
    {
        return view('pages.client.ordonance');
    }
    public function annuaire()
    {
        return view('pages.client.annuaire');
    }
    public function specialiste()
    {
        return view('pages.client.specialiste');
    }
    public function chat()
    {
        return view('pages.client.chat');
    }
    public function rendezvous()
    {
        return view('pages.client.rendezvous');
    }
    public function achats()
    {
        return view('pages.client.achats');
    }
    public function historique()
    {
        return view('pages.client.historique');
    }
    public function abonner()
    {
        return view('pages.client.abonner');
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
     * @param  \App\Http\Requests\StoreacteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreacteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\acte  $acte
     * @return \Illuminate\Http\Response
     */
    public function show(acte $acte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\acte  $acte
     * @return \Illuminate\Http\Response
     */
    public function edit(acte $acte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateacteRequest  $request
     * @param  \App\Models\acte  $acte
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateacteRequest $request, acte $acte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\acte  $acte
     * @return \Illuminate\Http\Response
     */
    public function destroy(acte $acte)
    {
        //
    }
}
