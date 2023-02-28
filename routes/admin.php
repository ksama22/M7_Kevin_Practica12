
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Importa el Controlador Admin
use App\Http\Controllers\Admin\ControladorAdmin;

//Dins de la ruta '/adb' busca '/articulos' es a dir '/adb/articulos'
Route::group(['middleware'=>['adb']],function(){
    Route::get('articulos',[ControladorAdmin::class,'articulos']);
});