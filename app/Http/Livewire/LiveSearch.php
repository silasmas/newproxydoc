<?php

namespace App\Http\Livewire;

use App\Models\produit;
use Livewire\Component;

class LiveSearch extends Component
{
    public string $nom='';
    public $tab=[];
    protected $queryString=[
        'nom'=>['except'=>'']
    ];
    public function updatedNom(){
        $this->tab = produit::where("nom", "LIKE","%{$this->nom}%")->get();
        // dd($this->tab);
        return  $this->tab ;
    }
    public function render()
    {
        $prod=[];
        return view('livewire.live-search',compact('prod'));
    }
}
