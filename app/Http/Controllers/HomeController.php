<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compras;
use App\Models\Despensa;
use Carbon\Carbon;

class HomeController extends Controller
{

     public function index(){

        $totalItens = Compras::count();
        $totalDepensa = Despensa::count();

        $agora = Carbon::now()->locale('pt_BR');

        return view('home.index_home')
        ->with('totalItens' , $totalItens)
        ->with('totalDespensa', $totalDepensa)
        ->with('agora', $agora);
    }

}
