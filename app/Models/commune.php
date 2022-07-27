<?php

namespace App\Models;

use App\Models\zone;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class commune extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "commune";
    protected $with = ['zone'];
    public function zone()
    {
        return $this->belongsTo(zone::class);
    }
}
