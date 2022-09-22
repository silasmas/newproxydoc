<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\produit;
use Gloudemans\Shoppingcart\Facades\Cart;
class Panier extends Component
{ 

    protected $listeners=['removeCarde',"updatePanier"=>'render'];
    public function deletConfirm($id){
        $this->dispatchBrowserEvent('swal:confirm',[
            'type'=>'warning',
            'titre'=>"êtes vous sûre de vouloir retiré ce produit du panier?",
            'text'=>"",
            'from'=>"panier",
            'id'=>$id,
        ]);
    }
    public function removeCarde($id)
    {

        Cart::remove($id);
        $this->dispatchBrowserEvent('swal:modal',[
            'type'=>'success',
            'titre'=>'Panier mis à jour',
            'text'=>"Produit retiré du panier",
            'from'=>"panier",
        ]);
         $this->emitTo("Panier","updatePanier");
    }
    public function render()
    {
        return view('livewire.panier');
    }
}
