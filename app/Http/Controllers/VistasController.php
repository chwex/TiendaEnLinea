<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasController extends Controller
{
    public function carrito(){
      return view('Micarrito');
    }
    public function envio(){
      return view('MetodoE');
    }
}
