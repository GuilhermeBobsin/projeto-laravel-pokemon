<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Treinador extends Model
{
    protected $fillble = [
        'nome'
    ];

    public function Pokemon(): HasMany
    {
        return $this->hasMany(Pokemon::class);
    }

}
