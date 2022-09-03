<?php

namespace App\Http\Controllers;

use App\Models\produit;
use App\Models\categorie;
use Illuminate\Http\Request;
use App\Http\Requests\StoreproduitRequest;
use App\Http\Requests\UpdateproduitRequest;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.pharmacie");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function monpanier()
    {
        return view("pages.monpanier");
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproduitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $prod = produit::with("categorie")->where("id", $id)->first();
        // $cat = categorie::with("produit")->get();
        return view("pages.detailProduit");
    }
    public function showCat($id)
    {
        $allproduits = produit::with("categorie")->where("id", $id)->first();
        $cat = categorie::with("produit")->where("id", $id)->get();
        dd($cat);
        return view("pages.detailProduit", compact("allproduits", "cat"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproduitRequest  $request
     * @param  \App\Models\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproduitRequest $request, produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return response()->json(['reponse' => true, 'msg' => "Le produit a été supprimé"]);
    }
}
