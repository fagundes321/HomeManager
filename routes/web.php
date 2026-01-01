<?php

use App\Http\Controllers\AvaliacoesController;
use App\Http\Controllers\CidadesController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\DespensaController;
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
Route::resource('/despensa', DespensaController::class)->except(['show']);
Route::resource('/avaliacoes', AvaliacoesController::class)->except(['show']);
// Route::get('/compras/editar/{compra}', [ComprasController::class, 'edit'])->name('compras.edit');
// Route::get('/compras/update/{compra}', [ComprasController::class,  'update'])->name('compras.update');
