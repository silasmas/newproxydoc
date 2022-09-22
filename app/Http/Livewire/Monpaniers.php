<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
class Monpaniers extends Component
{

    protected $listeners=["removeCardeMonPanier",'updateMonPanier'=>'$refresh'];
    public function deletConfirm($id){
        $this->dispatchBrowserEvent('swal:confirm',[
            'type'=>'warning',
            'titre'=>"êtes vous sûre de vouloir retiré ce produit du panier ?",
            'text'=>"",
            'from'=>"Monpanier",
            'id'=>$id,
        ]);
    }
    public function removeCardeMonPanier($id)
    {
        Cart::remove($id);
        $this->emitSelf("updateMonPanier");
        $this->dispatchBrowserEvent('swal:modal',[
            'type'=>'success',
            'titre'=>'Votre panier mis à jour panier',
            'text'=>"Produit retiré du panier",
            'from'=>"Monpanier",
        ]);
        
    }

    public function render()
    {
        return view('livewire.monpaniers');
    }
}
