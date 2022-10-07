<?php

namespace App\Http\Livewire;

use App\Models\produit;
use Livewire\Component;
use App\Models\categorie;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class ClPharmacie extends Component
{

    use WithPagination;

    public string $search="";
    protected $queryString=[
        'search'=>['except'=>'']
    ];
    public function addTocards($idProd)
    {
       $card= addToCard($idProd);
        // dd($card[0]);
       if ($card[0]===true) {
        $this->dispatchBrowserEvent('swal:modal',[
            'type'=>'success',
            'titre'=>'Panier mis à jour',
            'from'=>"pharmacie",
            'text'=>'Produit '.Str::upper($card[1])." est ajouter au panier",
        ]);
       } else {
        $this->dispatchBrowserEvent('swal:modal',[
            'type'=>'warning',
            'titre'=>'Panier déjà existant',
            'from'=>"pharmacie",
            'text'=>'Produit existe déjà dans votre panier',
        ]);
       }

    }
    public function updating($nom,$value){
        if($nom==="search"){
            $this->resetPage();
        }
    }

    public function paginationView(){
        return "vendor.pagination.bootstrap-4";
    }
    public function render()
    {
        $allproduits ="";
        if (request()->cat) {
            $allproduits = produit::with("categorie")
            ->where("nom", "LIKE","%{$this->search}%")->whereHas("categorie", function ($q) {
                $q->where("nom", request()->cat);
            })->orderBy("created_at", "DESC")->paginate(20);
            $allproduits->withPath('pharmacie?cat=' . request()->cat);
        } else {
            $allproduits = produit::with("categorie")->where("nom", "LIKE","%{$this->search}%")->paginate(20);
        }
        $cat = categorie::with("produit")->get();
        return view('livewire.cl-pharmacie', compact("allproduits", "cat"));
    }
}
