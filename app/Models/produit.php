<?php

namespace App\Models;

use App\Models\categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class produit extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function categorie(){
        return $this->belongsToMany(categorie::class,"categorie_produits");
    }
}
