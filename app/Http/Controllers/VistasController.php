<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasController extends Controller
{
    public function carrito(){
    	
      return view('/Vistas/Micarrito');
    }
    public function envio(){
      return view('/Vistas/MetodoE');
    }
       

}
