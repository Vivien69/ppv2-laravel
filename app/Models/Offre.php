<?php

namespace App\Models;

use App\Models\Marchand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_at',
        'finished_at',
        'f_remise',
        'f_devise',
        'f_mini',
        'f_content',
        'p_remise',
        'p_devise',
        'p_mini',
        'p_content',
        'url',
        'default',
        'boosted',
        'etat'
    ];

    public function marchand() : HasOne
    {
        return $this->hasOne(Marchand::class);
    }
}
