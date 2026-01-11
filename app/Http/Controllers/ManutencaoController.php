<?php

namespace App\Http\Controllers;

use App\Models\Manutencao;
use Illuminate\Http\Request;

class ManutencaoController extends Controller
{


     public function index(){

        $manutencao = Manutencao::all();

        return view('manutencao.index_manutencao')
        ->with('manutencao', $manutencao);

    }

    public function create(){



    }


     public function store(){



    }

     public function edit(){



    }


     public function update(){



    }

     public function destroy(){



    }

}
