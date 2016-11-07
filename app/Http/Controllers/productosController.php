<?php

namespace App\Http\Controllers;
use App\productos;						#Anadi la tabla 
use Illuminate\Http\Request;

class productosController extends Controller
{
    //Funcion que obtenga los 6 juegos mejor vendidos para mostrar en la pagina de inicio


 public function productosPopulares(){
 

 }

  public function guardar(Request $datos)
  {
  	$productos= new productos;
    $productos->nombre=$datos->input('nombre');
    #$productos->categoria=$datos->input('categoria');    checar por el id de la categoria
    $productos->inventario=$datos->input('inventario');
    $productos->precio=$datos->input('precio');
		
	return Redirect('categoria');	
        
  }

}