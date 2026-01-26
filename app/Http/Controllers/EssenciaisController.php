<?php

namespace App\Http\Controllers;

use App\Models\Essenciais;
use App\Models\Locais;
use Illuminate\Http\Request;

class EssenciaisController extends Controller
{

     public function index(){

        $essenciais = Essenciais::all();
        $locais = Locais::all();
        // $essenciais = Essenciais::orderByRaw("
        //         CASE
        //         WHEN local = 'Despensa' THEN 1
        //         WHEN local = 'Geladeira' THEN 2
        //         ELSE 3
        //     END
        // ")
        // ->orderBy('local')
        // ->get()
        // ->groupBy('local');

        return view('essenciais.index_essenciais', compact('essenciais', 'locais'))
     ;

    }


     public function create(){

        $locais = Locais::all();

        return view('essenciais.create_essenciais', compact('locais'));

    }


     public function store(Request $request){

        $criarEssencial = Essenciais::create($request->all());

        return to_route('essenciais.index');

    }



     public function edit(Essenciais $essenciai){

        $locais = Locais::all();

        return view('essenciais.edit_essenciais', [
            'essenciai' => $essenciai,
            'locais' => $locais
        ]);

    }


     public function update(Essenciais $essenciai, Request $request){

        $essenciai->fill($request->all());

        $essenciai->save();

        return to_route('essenciais.index');

    }



     public function destroy(Essenciais $essenciai){

        $essenciai->delete();

        return back();

    }


}
