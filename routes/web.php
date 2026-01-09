<?php

use App\Http\Controllers\AvaliacoesController;
use App\Http\Controllers\CidadesController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\PereciveisController;
use App\Http\Controllers\EssenciaisController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MercadosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});

Route::resource('/', HomeController::class)->except(['show']);
Route::resource('/compras', ComprasController::class)->except(['show']);
Route::resource('/mercado', MercadosController::class)->except(['show']);
Route::resource('/cidades', CidadesController::class)->except(['show']);
Route::resource('/pereciveis', PereciveisController::class)->except(['show']);
Route::patch('/pereciveis/{pereciveis}/decrement', [PereciveisController::class, 'decrement'])->name('pereciveis.decrement');

Route::resource('/avaliacao', AvaliacoesController::class)->except(['show']);
Route::patch('/avaliacao/{avaliacao}/favorite', [AvaliacoesController::class, 'favorite'])->name('avaliacao.favorite');


Route::resource('/essenciais', EssenciaisController::class)->except(['show']);
// Route::get('/compras/editar/{compra}', [ComprasController::class, 'edit'])->name('compras.edit');
// Route::get('/compras/update/{compra}', [ComprasController::class,  'update'])->name('compras.update');
