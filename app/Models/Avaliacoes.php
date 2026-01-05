<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacoes extends Model
{

    public $timestamps = false;

    protected $fillable = ['produto', 'favorito' ,'marca','categoria' ,'avaliacao' , 'comentario','menor_preco' , 'maior_preco' ,'data_avaliacao'];

        protected $casts = [
    'data_avaliacao' => 'date',
];
}
