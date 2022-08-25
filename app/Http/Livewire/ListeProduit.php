<?php

namespace App\Http\Livewire;

use App\Models\produit;
use Livewire\Component;
use Illuminate\Support\Str;
use Gloudemans\Shoppingcart\Facades\Cart;

class ListeProduit extends Component
{
     public $idProd="";
     public $quantity=0;
     public $msg;
    public function addTocards($idProd,$quantity=1)
    {
        $duplicata = Cart::search(function ($cartItem, $rowId) {
            return $cartItem->id == $this->idProd;
        });
        // dd($request->quantity);
        if ($duplicata->isNotEmpty() && $duplicata->first()->qty == $quantity) {
            // session()->flash('msg',"panier ajouter");
            $this->dispatchBrowserEvent('swal:modal',[
                'type'=>'success',
                'titre'=>'panier ajouter 1',
                'text'=>'panier ajouter',
            ]);
            // return response()->json(['reponse' => false, 'msg' => "Le produit a déjà été ajouté"]);
        } else {
            if ($duplicata->isNotEmpty() && $duplicata->first()->qty != $quantity) {
                $produit = produit::find($idProd);
                Cart::add($produit->id, $produit->nom, $quantity, $produit->prix)
                    ->associate("App\models\produit");
                // session()->flash('msg',"panier ajouter");
                $this->dispatchBrowserEvent('swal:modal',[
                    'type'=>'success',
                    'titre'=>'panier ajouter 2',
                    'text'=>'panier ajouter',
                ]);
                    // return response()->json(['reponse' => true, 'msg' => "La quantité est mis à jour avec succès"]);
            } else {

                $produit = produit::find($idProd);
                Cart::add($produit->id, $produit->nom, $quantity, $produit->prix)
                    ->associate("App\models\produit");
                // session()->flash('msg',"panier ajouter");
                $this->dispatchBrowserEvent('swal:modal',[
                    'type'=>'success',
                    'titre'=>'Panier mis à jour',
                    'text'=>'Produit '.Str::upper($produit->nom)." est ajouter au panier",
                ]);
                    // return response()->json(['reponse' => true, 'msg' => "Le produit a bien été ajouté"]);
            }
        }
    }
    public function render()
    {
        return view('livewire.liste-produit');
    }
}
