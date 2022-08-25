<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\produit;
use Gloudemans\Shoppingcart\Facades\Cart;
class Panier extends Component
{

    // public function addTocard($idProd,$quantity=1)
    // {

    //     $duplicata = Cart::search(function ($cartItem, $rowId) use ($request) {
    //         return $cartItem->id == $idProd;
    //     });
    //     // dd($request->quantity);
    //     if ($duplicata->isNotEmpty() && $duplicata->first()->qty == $quantity) {
    //         return response()->json(['reponse' => false, 'msg' => "Le produit a déjà été ajouté"]);
    //     } else {
    //         if ($duplicata->isNotEmpty() && $duplicata->first()->qty != $quantity) {
    //             $produit = produit::find($idProd);
    //             Cart::add($produit->id, $produit->nom, $quantity, $produit->prix)
    //                 ->associate("App\models\produit");
    //             return response()->json(['reponse' => true, 'msg' => "La quantité est mis à jour avec succès"]);
    //         } else {

    //             $produit = produit::find($idProd);
    //             Cart::add($produit->id, $produit->nom, $quantity, $produit->prix)
    //                 ->associate("App\models\produit");
    //             return response()->json(['reponse' => true, 'msg' => "Le produit a bien été ajouté"]);
    //         }
    //     }
    // }
    public function render()
    {
        return view('livewire.panier');
    }
}
