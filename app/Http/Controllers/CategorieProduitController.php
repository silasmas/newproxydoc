<?php

namespace App\Http\Controllers;

use App\Models\categorieProduit;
use App\Http\Requests\StorecategorieProduitRequest;
use App\Http\Requests\UpdatecategorieProduitRequest;

class CategorieProduitController extends Controller
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
     * @param  \App\Http\Requests\StorecategorieProduitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecategorieProduitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categorieProduit  $categorieProduit
     * @return \Illuminate\Http\Response
     */
    public function show(categorieProduit $categorieProduit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categorieProduit  $categorieProduit
     * @return \Illuminate\Http\Response
     */
    public function edit(categorieProduit $categorieProduit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategorieProduitRequest  $request
     * @param  \App\Models\categorieProduit  $categorieProduit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecategorieProduitRequest $request, categorieProduit $categorieProduit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categorieProduit  $categorieProduit
     * @return \Illuminate\Http\Response
     */
    public function destroy(categorieProduit $categorieProduit)
    {
        //
    }
}
