<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvaliacoesController extends Controller
{


     public function index(){

        return view('avaliacoes.index_avaliacoes');

    }


}
