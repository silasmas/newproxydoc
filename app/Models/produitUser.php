<?php

namespace App\Models;

use App\Models\produit;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produitUser extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $with = ["produit", "user"];
    public function produit()
    {
        return $this->belongsTo(produit::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
