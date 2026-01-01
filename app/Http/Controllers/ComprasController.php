<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComprasFormRequest;
// use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redirect;
use App\Models\Compras;
use App\Models\Mercados;
use App\Models\Cidades;
class ComprasController extends Controller
{

    public function index(Request $request)
    {

        // por ordem Alfabetica
        $compras = Compras::orderBy('cidade_id')
       ->orderBy('mercado_id')
       ->get();

        // Por ordem de criado
        // $compras = Compras::all();
        $mercados = Mercados::all();
        $cidades = Cidades::all();
        $mensagemSucesso = session('mensagem.sucesso');
        $mensagemErro = session('mensagem.erro');



        $totalCompras = Compras::totalCompras();
        return view('compras.index_compra')
            ->with('compras', $compras)
            ->with('mercados', $mercados)
            ->with('cidades', $cidades)
            ->with('totalCompras', $totalCompras)
            ->with('mensagemSucesso', $mensagemSucesso);
    }


    public function create()
    {

        $mercados = Mercados::all();
        $cidades = Cidades::all();
        return view("compras.create_compra")->with('mercados', $mercados)->with('cidades', $cidades);
    }


    public function store(ComprasFormRequest $request)
    {
        $request->merge([
            'preco' => str_replace(',', '.', $request->preco)
        ]);
        $quantidade = $request->quantidade;

        $compra = Compras::create($request->all());
        return to_route('compras.index')->with('mensagem.sucesso', "O item {$compra->nome} foi adicionado");
    }


    public function destroy(Compras $compra, Request $request)
    {

        $compra->delete();
        return to_route('compras.index')->with('mensagem.sucesso', "O item {$compra->nome} foi removido");
    }


    public function edit(Compras $compra)
    {

        $mercados = Mercados::all();
        $cidades =  Cidades::all();
        return view('compras.edit_compra')
            ->with('compra', $compra)
            ->with('mercados', $mercados)
            ->with('cidades', $cidades);
    }


    public function update(Compras $compra, ComprasFormRequest $request)
    {
            $request->merge([
            'preco' => str_replace(',', '.', $request->preco)
        ]);

        $compra->fill($request->all());
        $compra->save();

    
        return to_route('compras.index')->with('mensagem.sucesso', "Item {$compra->nome} Atualizado");
    }





}
