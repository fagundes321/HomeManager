<?php

namespace App\Http\Controllers;

use App\Models\Cidades;
use App\Models\Manutencao;
use App\Models\Mercados;
use Illuminate\Http\Request;
use App\Models\Locais;

class ManutencaoController extends Controller
{


    public function index()
    {
        $manutencao = Manutencao::orderBy('local_id')->get();
        $locais     = Locais::orderBy('local')->get();
        $cidades    = Cidades::all();

        return view('manutencao.index_manutencao', compact('manutencao', 'locais', 'cidades'));
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
