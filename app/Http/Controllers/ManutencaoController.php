<?php

namespace App\Http\Controllers;

use App\Models\Cidades;
use App\Models\Manutencao;
use Illuminate\Http\Request;

class ManutencaoController extends Controller
{


    public function index()
    {
        $cidades = Cidades::all();
        $manutencao = Manutencao::all();

        return view('manutencao.index_manutencao')
            ->with('manutencao', $manutencao)
            ->with('cidades', $cidades);
    }

    public function create()
    {

        $cidades = Cidades::all();

        return view('manutencao.create_manutencao', )
            ->with('cidades', $cidades);
    }


    public function store(Request $request)
    {

        $request->merge([
            'preco' => $request->filled('preco')
                ? str_replace(',', '.', $request->preco)
                : null
        ]);

        $manutencao = Manutencao::create($request->all());
        return to_route('manutencao.index');
    }

    public function edit() {}


    public function update() {}

    public function destroy() {}
}
