<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Despensa extends Model
{
        public $timestamps = false;

    protected $fillable = ['nome', 'marca', 'quantidade','local', 'validade'];


    protected $casts = [
    'validade' => 'date',
];

}
