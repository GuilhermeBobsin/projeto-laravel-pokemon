<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pokemon extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'tipo',
        'pontos_de_poder',
        'caminho_imagem',
    ];

    public function Treinador(): BelongsTo
    {
        return $this->belongsTo(Treinador::class);
    }
}
