<?php

use App\Http\Controllers\VueloController;
use App\Http\Controllers\TipoAsientoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [VueloController::class,'index'])->name('index.Vuelo');

Route::get('/tiposAsientos', [TipoAsientoController::class,'inicio'])->name('indexTipoAsiento');

Route::get('/tiposAsientos/agregarTipoDeAsiento', [TipoAsientoController::class, 'create'])->name('createTipoAsiento');
