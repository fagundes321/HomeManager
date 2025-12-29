<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Despensa;

class DespensaController extends Controller
{

    public function index()
    {

        $despensa = Despensa::All();
       $despensa = Despensa::orderByRaw("
            CASE
                WHEN local = 'Despensa' THEN 1
                WHEN local = 'Geladeira' THEN 2
                ELSE 3
            END
        ")
        ->orderBy('local')
        ->orderByRaw("
            CASE
                WHEN validade IS NULL THEN 2
                WHEN validade < CURDATE() THEN 0
                ELSE 1
            END
        ")
        ->orderBy('validade')
        ->get()
        ->groupBy('local');

        return view('despensa.index_despensa', compact('despensa'))
            ->with('despensa', $despensa);
    }


    public function create()
    {

        return view('despensa.create_despensa');
    }


    public function store(Request $request)
    {
        $salvarCasa = Despensa::create($request->all());
        return to_route('despensa.index');
    }


     public function edit(Despensa $despensa){



        return view('despensa.edit_despensa')->with('despensa', $despensa);

    }


     public function update(Despensa $despensa,Request $request){

        $despensa->fill($request->all());
        $despensa->save();

        return to_route('despensa.index');

    }


     public function destroy(Despensa $despensa){

        $despensa->delete();

        return to_route('despensa.index');

    }


}
