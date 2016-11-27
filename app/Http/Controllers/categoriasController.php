<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\categorias;
use App\productos;
use DB;

class categoriasController extends Controller
{
	#Redirige al formulario de categoria
	public function registrarCategoria(){
		return view ('/registrarCategoria');

	}
	#Guarda una nueva categoria en la BD y redirige a mostrar la lista
	public function guardarCategoria(Request $datos)
	 {	
    	$nuevo= new categorias;
    	$nuevo->nombrecategoria=$datos->input('nombre');
		$nuevo->save();

    	return Redirect('/mostrarCategoria');
    }
    #Retona las categorias existentes al administrador
    public function mostrarCategoria(){
    	$categorias=categorias::all();
    	return view ('mostrarCategoria', compact('categorias'));
    }


	//agreagar visita
	public function visitaCategoria(){
		DB::select('exec my_stored_procedure(?,?,..)',array($Param1,$param2));
	}


}
