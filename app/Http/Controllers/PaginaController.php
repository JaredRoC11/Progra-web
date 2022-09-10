<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('landingpage');  
    }

    public function formulario($codigo = null)
    {
        if($codigo == 1234){
            $nombre = "Juan el taquero";
            $email = "juan@tacos.com";
        }else{
            $codigo = null;
            $email = null;
            $nombre = null;
        } 

        return view('contacto', compact('codigo', 'nombre', 'email'));
    }
}
