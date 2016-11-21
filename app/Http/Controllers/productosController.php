<?php

namespace App\Http\Controllers;
use App\productos;
use App\categorias;				#Añadi la tabla
use Illuminate\Http\Request;
use DB;

class productosController extends Controller
{
    //Funcion que obtenga los 6 juegos mejor vendidos para mostrar en la pagina de inicio
public function productosPopulares(){



 }
 #Redirige al formulario de producto
  public function registrarProducto()
  {
    $categorias=categorias::all();
    return view ('/registrarProducto', compact('categorias'));
  }

  public function guardarProducto(Request $datos)
  {

  	$nuevo= new productos;
    $nuevo->nombreproducto=$datos->input('nombre');
    $nuevo->categoriaid=$datos->input('categoriaid');     #verificar como trabaja
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
      //Regresar toodos los productos existentes
     public function mostrarProducto(){
      $productos=productos::all();
      return view ('mostrarProducto', compact('productos'));
    }
     public function mostrarCateProd($id)
    {
        $productos = DB::select("SELECT p.nombreproducto, p.categoriaid, p.descripcion, p.inventario, p.precio, p.imagen
                     FROM productos p
                     INNER JOIN categorias c ON c.idcategoria = p.idproducto
                     WHERE p.idproducto = c.idcategoria AND p.idproducto = " . $id);

        return view('mostrarProducto', compact('productos'));
    }
    /*public function detallesProducto(){
      return view('/productoIndividual');    
    }*/

    public function productoVisitante(){
      $productos=productos::all();
      return view('/productoVisitante', compact('productos'));
    }
    public function mostrarProdVis($id)
    {
        $categorias = categorias::all();
        $productos = DB::select("SELECT p.nombreproducto, p.categoriaid, p.descripcion, p.inventario, p.precio, p.imagen
                     FROM productos p
                     INNER JOIN categorias c ON c.idcategoria = p.idproducto
                     WHERE p.idproducto = c.idcategoria AND p.idproducto = " . $id);

        return view('productoVisitante', compact('productos','categorias'));
    }


}
