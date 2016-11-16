<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\categorias;
use App\productos;
use DB;

class inicioController extends Controller
{
    //Funciones que se usan en la pagina principal
    public function inicio()
    {
        $categorias=categorias::all();
        $productosPop = DB::select("SELECT * FROM productos LIMIT 6");

        return view('paginaprincipal', compact('categorias','productosPop'));
    }
}
