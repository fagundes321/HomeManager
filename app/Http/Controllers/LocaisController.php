<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaisController extends Controller
{

     public function index(){

        return view('locais.index_locais');

    }

}
