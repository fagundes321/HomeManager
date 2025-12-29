<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Despensa;

class DespensaController extends Controller
{

     public function index(){

        $despensa = Despensa::All();

        return view('despensa.index_despensa')
        ->with('despensa', $despensa);

    }

}
