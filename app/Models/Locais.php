<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Locais extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'local'
    ];
}
