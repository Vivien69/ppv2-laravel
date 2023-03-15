<?php

namespace App\Models;

use App\Models\User;
use App\Models\Offre;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Marchand extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie_id',
        'actif',
        'etat',
        'foncparrainage',
        'content',
        'offers',
        'picture',
        'url_conditions',
        'url',
        'name'
    ];

    protected $guarded = [];


    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories() : HasOne
    {
        return $this->hasOne(Categorie::class);
    }

    public function comments() : HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function offres() : HasMany
    {
        return $this->hasMany(Offre::class);
    }
    
}
