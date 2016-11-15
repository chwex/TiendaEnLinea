<?php

namespace App\Http\Controllers;
use App\productos;
use App\categorias;				#Añadi la tabla
use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\categorias;
>>>>>>> a6b6c9ae1ad54fce5072c938a5208672d52d9a49
use DB;

class productosController extends Controller
{
    //Funcion que obtenga los 6 juegos mejor vendidos para mostrar en la pagina de inicio
<<<<<<< HEAD


 public function productosPopulares(){

=======
public function productosPopulares(){
 
>>>>>>> a6b6c9ae1ad54fce5072c938a5208672d52d9a49

 }
 #Redirige al formulario de producto
  public function registrarProducto()
  {
    $categorias=categorias::all();
    return view ('/registrarProducto', compact('categorias'));
  }

  public function guardarProducto(Request $datos)
  {
<<<<<<< HEAD
  	$productos= new productos;
    $productos->nombreproducto=$datos->input('nombre');
    #$productos->categoria=$datos->input('categoria');    checar por el id de la categoria
    $productos->inventario=$datos->input('inventario');
    $productos->precio=$datos->input('precio');

	return Redirect('categoria');

  }
  public function  registrarProducto(){
    $categorias=categorias::all();
    return view ('registrarProducto', compact('categorias'));

  }

=======
  	$nuevo= new productos;
    $nuevo->nombreproducto=$datos->input('nombre');
    $nuevo->categoriaid=$datos->input('categoria');     #verificar como trabaja
    $nuevo->descripcion=$datos->input('descripcion'); 
    $nuevo->inventario=$datos->input('inventario');
    $nuevo->precio=$datos->input('precio');

    /*$categoria=DB::table('categorias as c')
      ->join('productos As p', 'c.idcategoria', '=', 'p.categoriaid')
      ->where('p.categoriaid','=', '$id')
      ->get();*/
    $nuevo->save();

		
	return Redirect('/mostrarProducto');	
  }
     public function mostrarProducto(){
      $categorias=productos::all();
      return view ('mostrarProducto', compact('productos'));
    }
>>>>>>> a6b6c9ae1ad54fce5072c938a5208672d52d9a49
}
