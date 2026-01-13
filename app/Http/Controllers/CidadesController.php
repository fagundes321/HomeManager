<?php

namespace App\Http\Controllers;

use App\Models\Cidades;
use Illuminate\Http\Request;

class CidadesController extends Controller
{

    // retorna a view principal das cidades
     public function index(Request $request){

        // Criei uma propriedade responsavel por me retornar
        // os dados da Tebela/Model Cidades
        $cidades = Cidades::all();

       return view('cidades.index_cidade')
       ->with('cidades', $cidades);

    }

    //Esse metodo é responsavel por retornar a view de criar um nova cidade
     public function create(){

        return view('cidades.create_cidade');

    }

    // Esse metodo é responsavel por Salvar os dados no banco
     public function store(Request $request){

        //  dd($request);
        $cidades = Cidades::create($request->all());
        return to_route('cidades.index');

    }

    // Metodo responsavel por retornar a view da Editar a Cidade
     public function edit(Cidades $cidade, Request $request){

        return view('cidades.edit_cidade')->with('cidade', $cidade);

    }


     public function update(Cidades $cidade, Request $request){

        $cidade->fill($request->all());
        $cidade->save();
        return to_route('cidades.index');

    }


     public function destroy(Cidades $cidade, Request $request){

        $cidade->delete();
        return to_route('cidades.index');

    }


}
