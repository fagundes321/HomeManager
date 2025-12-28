<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compras;
use Carbon\Carbon;

class HomeController extends Controller
{

     public function index(){

        $totalItens = Compras::count();

         $agora = Carbon::now()->locale('pt_BR');

        return view('home.index_home')
        ->with('totalItens' , $totalItens)
        ->with('agora', $agora);
    }

}
