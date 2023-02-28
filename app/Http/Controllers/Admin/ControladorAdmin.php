<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorAdmin extends Controller
{       
    //Funcio articulos que es crida en el admin.php
    public function articulos(){
        //En la carpeta '/resources/views/Admin busca el 'mensajeAdmin'
        // I aplica el text a la variable 'text
        return view('Admin.mensajeAdmin')->with(['text'=>'Benvinguts a articles']);
    }

}
