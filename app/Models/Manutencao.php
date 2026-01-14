<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manutencao extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'local',
        'unidade',
        'observacao',
        'preco',
        'loja',
        'cidade_id'
    ];
}
