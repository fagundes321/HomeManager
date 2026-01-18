<?php

namespace App\Http\Controllers;

use App\Models\Locais;
use Illuminate\Http\Request;

class LocaisController extends Controller
{

     public function index(){

        $locais = Locais::all();

        return view('locais.index_locais',[
            'locais' => $locais
        ]);

    }


     public function create(){

        return view('locais.create_locais');

    }


     public function store(Request $request){

        Locais::create($request->all());

        return to_route('locais.index');

    }


     public function edit(Locais $locai){

        return view('locais.edit_locais',[
            'locai' => $locai
        ]);

    }


     public function update(Locais $locai, Request $request){

        $locai->update($request->all());

        return to_route('locais.index');

    }


     public function destroy(Locais $locai){

        $locai->delete();

        return back();

    }

}
