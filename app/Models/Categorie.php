<?php

namespace App\Models;

use App\Models\Marchand; 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function marchand() : BelongsTo {
        return $this->belongsTo(Marchand::class);
    }
}
