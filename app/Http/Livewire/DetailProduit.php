<?php

namespace App\Http\Livewire;

use App\Models\produit;
use Livewire\Component;
use App\Models\categorie;
use Illuminate\Support\Str;

class DetailProduit extends Component
{
    public $qty = 1;
     public $idProd = "";
    public function increment()
    {
        $this->qty = $this->qty + 1;
    }
    public function decrement()
    {
        $this->qty = $this->qty - 1;
    }
    public function ajoutCards($idProd,$q)
    {
        // dd($q, $idProd);
        // $this->reset();
        $card = addToCard($idProd, $q);

        if ($card[0] === true) {
            $this->dispatchBrowserEvent('swal:modal', [ 
                'type' => 'success',
                'titre' => 'Panier mis à jour',
                'text' => 'Produit ' . Str::upper($card[1]) . " est ajouter au panier",
            ]);
            
           return redirect('detailProdui/' . $idProd);
        } else {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'warning',
                'titre' => 'Panier déjà existant',
                'text' => 'Produit existe déjà dans votre panier',
            ]);
            return redirect('detailProdui/' . $idProd);
        }
    }

    public function render()
    {
        $id = request()->id;
        $prod = produit::with("categorie")->where("id", $id)->first();
        $cat = categorie::with("produit")->get();
        return view('livewire.detail-produit', compact("prod", "cat"));
    }
}
