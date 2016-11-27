<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\productos;
use App\categorias;	
use App\comentarios;			#Añadi la tabla
use DB;
use App\Http\Requests;
use App\http\Controllers\Controller; 
use Session;
use Redirect;

class comentariosController extends Controller
{
    public function guardar(Request $request){


    	$idproducto=$request->input('idproducto');
    	$mensaje=$request->input('mensaje');
        $idusuario = \Auth::user()->id;

        $valor = (int)$request->input('calificacion');
    	//Guardar en BD

    	$nuevo = new comentarios;
    	$nuevo->idusuario= $idusuario;
        $nuevo->idproducto= $idproducto;
    	$nuevo->mensaje=$mensaje;
    	$nuevo->save();


        $calificaciones             = new \App\calificaciones;
        $calificaciones->idusuario  = $idusuario;
        $calificaciones->idproducto = $idproducto;
        $calificaciones->valor      = $valor;
        $calificaciones->save();

    	return Redirect('/productos/'.$idproducto);

    } 
}
