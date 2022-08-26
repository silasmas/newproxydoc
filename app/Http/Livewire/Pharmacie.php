<?php

namespace App\Http\Livewire;

use App\Models\produit;
use Livewire\Component;
use App\Models\categorie;

class Pharmacie extends Component
{
    public function render()
    {
        if (request()->cat) {
            $allproduits = produit::with("categorie")->whereHas("categorie", function ($q) {
                $q->where("nom", request()->cat);
            })->orderBy("created_at", "DESC")->simplePaginate(20);
            $allproduits->withPath('pharmacie?cat=' . request()->cat);
        } else {
            // $allproduits = categorie::with("produit")->simplePaginate(20);
            $allproduits = produit::with("categorie")->simplePaginate(20);
        }
        $cat = categorie::with("produit")->get();

        //
        return view('livewire.pharmacie', compact("allproduits", "cat"));
    }
}
