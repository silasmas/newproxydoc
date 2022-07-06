<?php

namespace App\Models;

use App\Models\produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categorie extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ["produit"];

    public function produit(){
        return $this->belongsToMany(produit::class,'categorie_produits');
    }
}
