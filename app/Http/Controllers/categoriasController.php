<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\categorias;
use DB;

class categoriasController extends Controller
{
	 public function guardar(Request $datos)
	 {
    	$categoria= new categorias;
    	$categoria->nombre=$datos->input('nombre');
		$categoria->save();


    	return Redirect('/inicio');
    }
}
