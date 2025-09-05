<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class musicas extends Model
{
    protected $fillable = [
        'nome',
        'cantor',
        'ano_lancamento',
        'album'
    ];
}
