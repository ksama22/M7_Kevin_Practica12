<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Creat amb:  php artisan make:controller ControlerMain
class ControlerAdmin extends Controller
{
    public function articulos(){
        return view('Admin.mensajeAdmin')->with(['text'=>'Benvinguts a articles ']);
    }

}
