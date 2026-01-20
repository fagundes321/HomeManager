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
        'link',
        'cidade_id'
    ];

    public function local()
    {
        return $this->belongsTo(Locais::class, 'local_id');
    }
}
