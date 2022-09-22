<?php

namespace App\Http\Livewire;

use App\Models\categorie;
use App\Models\produit;
use Livewire\Component;
use Illuminate\Support\Str;
class DetailProduit extends Component
{
    public $qty = 1;
    public $idProd = "";
    public $prod;
    public $cat;
    protected $listeners = ['updateDetail' => '$refresh'];
    public function up($i){
        $this->qty=$i;
    }
    public function ajoutCardsDetail($idProd, $q)
    {

        $card = addToCard($idProd, $q);

        if ($card[0] === true) {
            $this->emitSelf("updateDetail");
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'titre' => 'Panier mis à jour',
                'from'=>"Detail",
                'text' => 'Produit ' . Str::upper($card[1]) . " est ajouter au panier detail",
            ]);

        } else {
            $this->emitSelf("updateDetail");
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'warning',
                'titre' => 'Panier déjà existant',
                'from'=>"Detail",
                'text' => 'Produit existe déjà dans votre panier detail',
            ]);

        }
    }
   
    public function mount()
    {
        $id = request()->id;
        $this->prod = produit::with("categorie")->where("id", $id)->first();
        $this->cat = categorie::with("produit")->get();
    }
    public function render()
    {

        return view('livewire.detail-produit');
    }
}
