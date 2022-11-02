<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandasController;

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

Route::get('/index', [BandasController::class, 'index'])->name('bandas-index');
Route::get('/create', [BandasController::class, 'create'])->name('bandas-create');
Route::post('/store', [BandasController::class, 'store'])->name('bandas-store');


