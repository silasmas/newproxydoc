<?php

namespace App\Http\Controllers;

use App\Models\produitUser;
use App\Http\Requests\StoreproduitUserRequest;
use App\Http\Requests\UpdateproduitUserRequest;

class ProduitUserController extends Controller
{
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
     * @param  \App\Http\Requests\StoreproduitUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproduitUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produitUser  $produitUser
     * @return \Illuminate\Http\Response
     */
    public function show(produitUser $produitUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produitUser  $produitUser
     * @return \Illuminate\Http\Response
     */
    public function edit(produitUser $produitUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproduitUserRequest  $request
     * @param  \App\Models\produitUser  $produitUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproduitUserRequest $request, produitUser $produitUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produitUser  $produitUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(produitUser $produitUser)
    {
        //
    }
}
