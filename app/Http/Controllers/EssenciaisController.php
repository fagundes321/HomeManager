<?php

namespace App\Http\Controllers;

use App\Models\Essenciais;
use Illuminate\Http\Request;

class EssenciaisController extends Controller
{

     public function index(){

        $essenciais = Essenciais::all();

        $essenciais = Essenciais::orderByRaw("
                CASE
                WHEN local = 'Despensa' THEN 1
                WHEN local = 'Geladeira' THEN 2
                ELSE 3
            END
        ")
        ->orderBy('local')
        ->get()
        ->groupBy('local');

        return view('essenciais.index_essenciais', compact('essenciais'))
        ->with('essenciais', $essenciais);

    }


     public function create(){

        return view('essenciais.create_essenciais');

    }


     public function store(Request $request){

        $criarEssencial = Essenciais::create($request->all());

        return to_route('essenciais.index');

    }



     public function edit(Essenciais $essenciais){

        return view('essenciais.edit_essenciais')
        ->with('essenciais', $essenciais);

    }

}
