<?php

namespace App\Http\Livewire;

use App\Models\produit;
use Livewire\Component;
use App\Models\categorie;
use Illuminate\Support\Str;

class DetailProduit extends Component
{
    public string $idProd="";
    public int $qty=1;

    public function addToCards($idProd)
    {

       $card= addToCard($idProd,$this->qty);

       if ($card[0]===true) {
        $this->dispatchBrowserEvent('swal:modal',[
            'type'=>'success',
            'titre'=>'Panier mis à jour',
            'text'=>'Produit '.Str::upper($card[1])." est ajouter au panier",
        ]);
       } else {
        $this->dispatchBrowserEvent('swal:modal',[
            'type'=>'warning',
            'titre'=>'Panier déjà existant',
            'text'=>'Produit existe déjà dans votre panier',
        ]);
       }

    }

    public function render()
    {
        $id=request()->id;
        $prod = produit::with("categorie")->where("id", $id)->first();
        $cat = categorie::with("produit")->get();
        return view('livewire.detail-produit', compact("prod", "cat"));
    }
}
