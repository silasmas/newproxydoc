<?php

namespace App\Http\Controllers;

use App\Models\livraison;
use App\Http\Requests\StorelivraisonRequest;
use App\Http\Requests\UpdatelivraisonRequest;

class LivraisonController extends Controller
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
     * @param  \App\Http\Requests\StorelivraisonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelivraisonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\livraison  $livraison
     * @return \Illuminate\Http\Response
     */
    public function show(livraison $livraison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\livraison  $livraison
     * @return \Illuminate\Http\Response
     */
    public function edit(livraison $livraison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelivraisonRequest  $request
     * @param  \App\Models\livraison  $livraison
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelivraisonRequest $request, livraison $livraison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\livraison  $livraison
     * @return \Illuminate\Http\Response
     */
    public function destroy(livraison $livraison)
    {
        //
    }
}
