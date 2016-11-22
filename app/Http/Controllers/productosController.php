<?php

namespace App\Http\Controllers;
use App\productos;
use App\categorias;				#Añadi la tabla
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\http\Controllers\Controller; 
use Session;
use Redirect;


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
    $nuevo->save();


	return Redirect('/mostrarProducto');
  }   
      //Regresar toodos los productos existentes
    public function mostrarProducto()
    {
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

    public function detallesProducto(){
      $productos= productos:: all();
      $categorias= categorias::all();      
      return view('/productoIndividual', compact('productos', 'categorias'));    
    }

    public function productoVisitante(){
      $productos=productos::all();
      return view('/productoVisitante', compact('productos'));
    }
    public function mostrarProdVis($id)
    {
        $categorias = categorias::all();
        $productos = DB::select("SELECT p.idproducto, p.nombreproducto, p.categoriaid, p.descripcion, p.inventario, p.precio, p.imagen
                     FROM productos p
                     INNER JOIN categorias c ON c.idcategoria = p.idproducto
                     WHERE p.categoriaid = " . $id);

        return view('productoVisitante', compact('productos','categorias'));
    }
    public  function productos($id)
    {
        $categorias=DB::select("SELECT * FROM categorias WHERE idcategoria = " . $id);
        $productos=DB::select("SELECT * FROM productos WHERE idproducto = " . $id);    
        return view('/productoIndividual', compact('productos','categorias'));
    }

    public function agregarCarrito($idproducto)
    {
        $categorias=categorias::all();
        $idusuario = \Auth::user()->id;
        $existe = DB::select('SELECT * FROM carritousuario WHERE idusuario=' . $idusuario .  ' AND idproducto=' . $idproducto. ';');
        if(count($existe) == 0)
        {
            DB::insert('insert into carritousuario (idusuario, idproducto) values (' . $idusuario . ',' . $idproducto . ');');
        }

        $productos=DB::select("SELECT * FROM productos WHERE idproducto = " . $idproducto);
        $categorias = categorias::all();

        return Redirect('/productos/' . $idproducto);
    }

    public function obtenerCarrito()
    {
        $categorias=categorias::all();
        $idusuario = \Auth::user()->id;
        $productosCarrito = DB::select("select p.idproducto, u.id, p.nombreproducto, p.descripcion, p.inventario, p.precio, p.imagen, cat.nombrecategoria 
                        from carritousuario cu
                        inner join users u on cu.idusuario = u.id
                        inner join productos p on cu.idproducto = p.idproducto
                        inner join categorias cat on p.categoriaid = cat.idcategoria
                        where u.id = " . $idusuario);

        return view('/Vistas/Micarrito', compact('productosCarrito', 'categorias'));
    }

}
