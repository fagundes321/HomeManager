<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Essenciais extends Model
{
     public $timestamps = false;

    protected $fillable = [
        'nome',
        'quantidade',
        'unidade',
        'local_id'
    ];



}
