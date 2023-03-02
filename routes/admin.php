
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Importa el Controlador Admin
use App\Http\Controllers\Admin\ControladorAdmin;

//Dins de la ruta '/adb' busca '/articulos' es a dir '/adb/articulos'
Route::group(['middleware'=>['adb']],function(){
    Route::get('articulo',[ControladorAdmin::class,'articulos']);
    Route::get('cliente',[ControladorAdmin::class,'clientes']);
    Route::get('contabilidad',[ControladorAdmin::class,'contabilidades']);
    Route::get('facturacion',[ControladorAdmin::class,'facturaciones']);
});