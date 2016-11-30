<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\usuario;
class usuarioController extends Controller
{
    public function registroUsuario()
    {
    	return view('/registroUsuario');
    }

     public function guardar(Request $datos)
    {
    	$nuevo = new usuario;
    	$nuevo->name=$datos->input('nombre');
    	$nuevo->email=$datos->input('email');
    	$nuevo->password=$datos->input('contrasena');
    	$nuevo->nombrecompleto=$datos->input('nombrecompleto');
    	$nuevo->domicilio=$datos->input('domicilio');
    	$nuevo->telefono=$datos->input('telefono');
    	$nuevo->sexo=$datos->input('sexo');
    	$nuevo->fechanacimiento=$datos->input('fechanacimiento');
    	$nuevo->save();

    	return Redirect('/registroUsuario');
    }

}
