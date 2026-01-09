<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pereciveis;

use Illuminate\Support\Facades\DB;


class PereciveisController extends Controller
{

    public function index()
    {

        $pereciveis = Pereciveis::All();
        $pereciveis = Pereciveis::
            //    orderByRaw("
            //         CASE
            //             WHEN local = 'Pereciveis' THEN 1
            //             WHEN local = 'Geladeira' THEN 2
            //             ELSE 3
            //         END
            //     ")
            //     ->orderBy('local')
            orderByRaw("
            CASE
                WHEN validade IS NULL THEN 2
                WHEN validade < CURDATE() THEN 0
                ELSE 1
            END
        ")
            ->orderBy('validade')
            ->get();




        return view('pereciveis.index_pereciveis', compact('pereciveis'));
    }


    public function create()
    {

        return view('pereciveis.create_pereciveis');
    }


    public function store(Request $request)
    {
        $salvarCasa = Pereciveis::create($request->all());
        return to_route('pereciveis.index');
    }


    public function edit(Pereciveis $perecivei)
    {



        return view('pereciveis.edit_pereciveis')->with('pereciveis', $perecivei);
    }


    public function update(Pereciveis $perecivei, Request $request)
    {

        $perecivei->fill($request->all());
        $perecivei->save();

        return to_route('pereciveis.index');
    }


    public function destroy(Pereciveis $perecivei)
    {

        $perecivei->delete();


        return to_route('pereciveis.index');
    }


    public function decrement(Pereciveis $pereciveis)
    {

        $pereciveis->decrementQuantidade();


        return back();

        // return to_route('pereciveis.index');

    }
}
