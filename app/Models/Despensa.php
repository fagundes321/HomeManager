<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Despensa extends Model
{
    protected $fillable = ['nome', 'marca', 'local', 'validade'];
}
