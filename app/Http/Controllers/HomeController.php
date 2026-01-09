<?php

namespace App\Http\Controllers;

use App\Models\Avaliacoes;
use Illuminate\Http\Request;
use App\Models\Compras;
use App\Models\Pereciveis;
use App\Models\Essenciais;
use Carbon\Carbon;

class HomeController extends Controller
{

     public function index(){

        $totalItens = Compras::count();
        $totalDepensa = Pereciveis::count();
        $totalAvaliacoes = Avaliacoes::count();
        $totalEssenciais = Essenciais::count();
        $agora = Carbon::now()->locale('pt_BR');

     $validadePereciveis = Pereciveis::whereNotNull('validade')
    ->orderBy('validade', 'asc')
    ->first();



        return view('home.index_home')
        ->with('totalItens' , $totalItens)
        ->with('totalPereciveis', $totalDepensa)
        ->with('totalAvaliacoes', $totalAvaliacoes)
        ->with('validadePereciveis', $validadePereciveis)
        ->with('totalEssenciais', $totalEssenciais)
        ->with('agora', $agora);
    }

}
