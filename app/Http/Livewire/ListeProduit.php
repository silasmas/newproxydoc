<?php

namespace App\Http\Livewire;

use App\Models\produit;
use Livewire\Component;
use Illuminate\Support\Str;

class ListeProduit extends Component
{
     public $idProd="";
     public $quantity=0;
     public $msg;
    public function addTocards($idProd)
    {
       $card= addToCard($idProd);
        // dd($card[0]);
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
        return view('livewire.liste-produit');
    }
}
