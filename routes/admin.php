
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Importa el Controlador Admin
use App\Http\Controllers\Admin\ControladorAdmin;

//Dins de la ruta '/adb' busca '/cliente' es a dir '/adb/cliente'
Route::group(['middleware'=>['adb']],function(){
    Route::get('/',[ControladorAdmin::class,'inicio']) -> name('link_home');
    Route::get('/cliente',[ControladorAdmin::class,'clientes'])-> name('link_cliente');
    Route::get('/contabilidad',[ControladorAdmin::class,'contabilidades'])-> name('link_contabilidad');
    Route::get('/facturacion',[ControladorAdmin::class,'facturaciones'])-> name('link_facturacion');
    //Route::get('/articulo',[ControladorAdmin::class,'articulos'] -> name('link_articulo'));
});