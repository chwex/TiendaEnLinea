<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\categorias;
use DB;

class categoriasController extends Controller
{
    public function inicio()
    {
        $categorias=categorias::all();
        return view('inicio', compact('categorias'));
    }
}
