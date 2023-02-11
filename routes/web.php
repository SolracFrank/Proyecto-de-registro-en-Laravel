<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\RegistroController;
use  App\Http\Controllers\InicioController;

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
Route::controller(RegistroController::class) -> group(function()
{
    Route::get('inicio', 'index');

    Route::get('registro', 'create');
});



Route::get('/',InicioController::class);

