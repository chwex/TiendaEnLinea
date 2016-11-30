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

	//mover este a categorias controller?
    public function mostrarProdVis($idc)
    {
        if ( \Auth::check()) {
            $idu = \Auth::user()->id;
        }   
        else{
            $idu = 9;
        }
        DB::select('call sp_visitacategoria(?,?)',array($idu,$idc));
        $categorias = categorias::all();
        $productos = DB::select("SELECT p.idproducto, p.nombreproducto, p.categoriaid, p.descripcion, p.inventario, p.precio, p.imagen
                     FROM productos p
                     INNER JOIN categorias c ON c.idcategoria = p.categoriaid
                     WHERE p.categoriaid = " . $idc);

        return view('productoVisitante', compact('productos','categorias'));
    }
}
