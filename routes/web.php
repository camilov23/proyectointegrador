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
Route::resource('detalle', 'detalle_pedidoController');
Route::resource('pedido', 'pedidosController');
Route::resource('producto', 'ProductoController');
Route::get('imprimirproductos','PdfController@imprimirproductos')->name('imprimirproductos');
Route::get('imprimirpedidos','pedidoPdfController@imprimirpedidos')->name('imprimirpedidos');
Route::get('/', function () {
    return view('welcome');
});
