<?php

namespace App\Http\Controllers;

use App\Models\Cidades;
use App\Models\Manutencao;
use App\Models\Mercados;
use Illuminate\Http\Request;

class ManutencaoController extends Controller
{


    public function index()
    {
        $cidades = Cidades::all();
        $manutencao = Manutencao::orderByRaw("
            CASE
                WHEN local = 'Casa' THEN 1
                WHEN local = 'Carro' THEN 2
                ELSE 5
            END")
            ->orderBy('nome')
            ->get()
            ->groupBy('local')
            ;

        return view('manutencao.index_manutencao')
            ->with('manutencao', $manutencao)
            ->with('cidades', $cidades);
    }

    public function create()
    {

        $cidades = Cidades::all();

        return view('manutencao.create_manutencao',)
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

    public function edit(Manutencao $manutencao)
    {

        $cidades = Cidades::all();
        // $manutencao = Manutencao::all();

        return view('manutencao.edit_manutencao')
            ->with('cidades', $cidades)
            ->with('manutencao', $manutencao);
    }


    public function update(Manutencao $manutencao, Request $request)
    {
        $request->merge([
            'preco' => $request->filled('preco')
                ? str_replace(',', '.', $request->preco)
                : null
        ]);

        $manutencao->fill($request->all());
        $manutencao->save();

        return to_route('manutencao.index');
    }

    public function destroy(Manutencao $manutencao)
    {

        $manutencao->delete();

        return back();
    }
}
