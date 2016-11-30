<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;
use App\categorias;	
use App\comentarios;			#Añadi la tabla
use App\calificaciones;
use DB;
use App\Http\Requests;
use App\http\Controllers\Controller; 
use Session;
use Redirect;

class calificacionesController extends Controller
{
      public function guardar($idusuario, $idproducto, $valor){
    	//Guardar en BD
    	 // Creamos una nueva calificacion
        $calificaciones             = new \App\calificaciones;
        $calificaciones->idusuario  = $idusuario;
        $calificaciones->idproducto = $idproducto;
        $calificaciones->valor      = $valor;
        $calificaciones->save();

    } 
}
