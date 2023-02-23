
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'adb'],function(){
    Route::get('/articulos',[ControlerAdmin::class,'articulos']);
});