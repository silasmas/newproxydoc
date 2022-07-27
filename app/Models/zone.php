<?php

namespace App\Models;

use App\Models\commune;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zone extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function commune()
    {
        return $this->hasMany(commune::class);
    }
}
