<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avaliacoes;
use Carbon\Carbon;

class AvaliacoesController extends Controller
{


    public function index()
    {

        $avaliacoes = Avaliacoes::All();

        $avaliacoes = Avaliacoes::orderByRaw("
            CASE
                WHEN favorito = 1 THEN 0
                ELSE 1
            END
        ")
            ->orderByRaw("
            CASE
                WHEN categoria = 'Alimentos' THEN 1
                WHEN categoria = 'Bebidas' THEN 2
                WHEN categoria = 'Higiene' THEN 3
                WHEN categoria = 'Limpeza' THEN 4
                ELSE 5
            END
        ")
            ->orderBy('produto')
            ->get()
            ->groupBy('categoria');




        return view('avaliacoes.index_avaliacoes')
            ->with('avaliacoes', $avaliacoes);
    }


    public function create()
    {

        return view('avaliacoes.create_avaliacoes');
    }


    public function store(Request $request)
    {

        $dados = [
            'favorito' => 0,
            'produto' => $request->produto,
            'marca' => $request->marca,
            'categoria' => $request->categoria,
            'avaliacao' => $request->avaliacao,
            'comentario' => $request->comentario,

            'menor_preco' => $request->filled('menor_preco')
                ? str_replace(',', '.', $request->menor_preco)
                : null,

            'maior_preco' => $request->filled('maior_preco')
                ? str_replace(',', '.', $request->maior_preco)
                : null,

            'data_avaliacao' => now(),
        ];

        Avaliacoes::create($dados);
        return to_route('avaliacao.index');
    }


    public function destroy(Avaliacoes $avaliacao)
    {
        $avaliacao->delete();
        return to_route('avaliacao.index');
    }



    public function edit(Avaliacoes  $avaliacao)
    {

        return view('avaliacoes.edit_avaliacoes')
            ->with('avaliacao', $avaliacao);
    }


    public function update(Request $request, Avaliacoes $avaliacao)
    {
        $request->merge([


            'menor_preco' => $request->filled('menor_preco')
                ? str_replace(',', '.', $request->menor_preco)
                : null,

            'maior_preco' => $request->filled('maior_preco')
                ? str_replace(',', '.', $request->maior_preco)
                : null,

            'data_avaliacao' => now(),
        ]);

        $avaliacao->fill($request->all());
        $avaliacao->save();

        return to_route('avaliacao.index');
    }


    public function favorite(Avaliacoes $avaliacao, Request $request)
    {

        $statusFavorito = $avaliacao->favorito;

        if ($statusFavorito == 0) {
            $request->merge([
                'favorito' => 1
            ]);

            $avaliacao->fill($request->all());
            $avaliacao->save();

            return back();
        } else {
            $request->merge([
                'favorito' => 0
            ]);

            $avaliacao->fill($request->all());
            $avaliacao->save();

            return back();
        }
    }
}
