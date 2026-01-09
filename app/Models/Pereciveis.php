<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pereciveis extends Model
{
        public $timestamps = false;

    protected $fillable = ['nome', 'marca', 'quantidade','local', 'validade'];


    protected $casts = [
    'validade' => 'date',
];

 public function decrementQuantidade()
    {
        if ($this->quantidade > 1) {
            $this->decrement('quantidade');
        } else {
            $this->delete();
        }
    }

}
