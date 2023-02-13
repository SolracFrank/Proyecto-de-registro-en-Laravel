<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\RegistroController;
use  App\Http\Controllers\InicioController;
use  App\Http\Controllers\PDFController;

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
    Route::get('buscar', 'search')->name('buscar');
    Route::get('registro', 'create')->name('registro');

});
Route::resource('pdf', PDFController::class);
Route::get('/',InicioController::class)->name('home');
Route::get('/pdfx/{CURP}', 'PDFController@show')->name('pdfx.show');



