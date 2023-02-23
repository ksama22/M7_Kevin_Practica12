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


//En la ruta cliente carrega el view resources\views\cliente.blade.php
Route::get('/cliente', function () {
    return view('cliente');
});

//En la ruta cliente carrega el view resources\views\contable.blade.php
Route::get('/contable', function () {
    return view('contable');
});

//En la ruta cliente carrega el view resources\views\facturacion.blade.php
Route::get('/facturacion', function () {
    return view('facturacion');
});
