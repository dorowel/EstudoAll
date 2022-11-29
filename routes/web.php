<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('estudos')->group(function(){

    Route::get('/getters',[\App\Http\Controllers\GeneralStudy::class,'getters'])->name('getters');
    Route::get('/construct',[\App\Http\Controllers\GeneralStudy::class,'construct']);
    Route::get('/heranca',[\App\Http\Controllers\GeneralStudy::class,'heranca']);
    Route::get('/abstract',[\App\Http\Controllers\GeneralStudy::class,'abstrato']);
    Route::get('/atributosestaticos',[\App\Http\Controllers\GeneralStudy::class,'atributosestaticos']);
    Route::get('/polimorfismo',[\App\Http\Controllers\GeneralStudy::class,'polimorfismo']);
    Route::get('/interfaces',[\App\Http\Controllers\GeneralStudy::class,'interfaces']);
    Route::get('/referencia-clonagem',[\App\Http\Controllers\GeneralStudy::class,'clon']);
    Route::get('/excecoes',[\App\Http\Controllers\GeneralStudy::class,'excecoes']);
    Route::get('/relacao-objeto',[\App\Http\Controllers\GeneralStudy::class,'relacaoobjeto'])->name('relacao-objeto');
    Route::get('/agregacao',[\App\Http\Controllers\GeneralStudy::class,'agregacao'])->name('agregacao');

});


