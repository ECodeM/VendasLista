<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/vendas', [VendasController::class , 'listarVendas']);
Route::get('/vendas/ver/{id}', [VendasController::class , 'verVendas']);
Route::get('/vendas/nova/{produto}/{quantidade}/{preco}', [VendasController::class , 'cadastrarVenda']);
Route::get('/vendas/atualizar/{id}/{produto}/{quantidade}/{preco}', [VendasController::class , 'atualizarVenda']);
Route::get('/vendas/excluir/{id}', [VendasController::class , 'excluirVenda']);


