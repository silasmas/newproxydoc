<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
class Monpaniers extends Component
{

    protected $listeners=['removeCarde'];
    public function deletConfirm($id){
        $this->dispatchBrowserEvent('swal:confirm',[
            'type'=>'warning',
            'titre'=>"êtes vous sûre de vouloir retiré ce produit du panier?",
            'text'=>"",
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
        ]);
        $this->resetPage();
    }
    public function updating($nom,$value){
        
            $this->resetPage();
    }
    public function render()
    {
        return view('livewire.monpaniers');
    }
}
