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

    Route::get('/getters',[\App\Http\Controllers\GeneralStudy::class,'getters']);
    Route::get('/construct',[\App\Http\Controllers\GeneralStudy::class,'construct']);
    Route::get('/heranca',[\App\Http\Controllers\GeneralStudy::class,'heranca']);
    // teste
});

// teste
