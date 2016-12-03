<?php

namespace App\Http\Controllers;
use App\productos;
use App\categorias;				#Añadi la tabla
use Illuminate\Http\Request;
use DB;
use App\comentarios;
use App\calificaciones;
use App\Http\Requests;
use Session;
use Redirect;


class productosController extends Controller
{
    public function inicio()
    {
        $categorias=categorias::all();
        $productosPop = DB::select("SELECT * FROM productos LIMIT 6");

        return view('paginaprincipal', compact('categorias','productosPop'));
    }
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

    public function detallesProducto(){
      $productos= productos:: all();
      $categorias= categorias::all();      
      return view('/productoIndividual', compact('productos', 'categorias'));    
    }

    public function productoVisitante(){
      $productos=productos::all();
      return view('/productoVisitante', compact('productos'));
    }

    public  function productos($idp)
    {
        if ( \Auth::check()) {
            $idu = \Auth::user()->id;
        }   
        else{
            $idu = 9;
        }
        DB::select('call sp_visitaproducto(?,?)',array($idu,$idp));
        $categorias=DB::select("SELECT * FROM categorias WHERE idcategoria = " . $idp);
        $productos=DB::select("SELECT * FROM productos WHERE idproducto = " . $idp);    
        $comentarios=DB::select("SELECT * FROM comentarios c INNER JOIN users u on c.idusuario = u.id INNER JOIN productos p on c.idproducto = p.idproducto WHERE p.idproducto = " .$idp);

        return view('/productoIndividual', compact('productos','categorias','comentarios'));
    }

    public function voto($id){
      $categorias=DB::select("SELECT * FROM categorias WHERE idcategoria = " . $id);
      $productos=DB::select("SELECT * FROM productos WHERE idproducto = " . $id);    
      $calificaciones=DB::select("SELECT * FROM calificaciones c INNER JOIN users u on c.idusuario = u.id INNER JOIN productos p on c.idproducto = p.idproducto WHERE p.idproducto = " .$id);

        return view('/productoIndividual', compact('productos','categorias','calificaciones'));
    }

    public function validarExistencia($lstArt){
        //obtener todos los ids de los articulos de la venta
        $idArts = array_column($lstArt, 'id');
        $val = true;
        foreach($idArts as $id)
        {
            //obtener el articulo con el id
            $articulo = $this->obtenerObjporId($id, $lstArt);

            //seleccionar la existencia del articulo
            $existencia = DB::select("select existencia from `articulos` where id=" . $id . ";");
            
            //validar existencia
            $ext = (int)$existencia - (int)$articulo['existencia'];

            //si ext es mayor o igual a 0, pasar al siguiente id, sino salr del bucle y abortar la venta
            if($ext < 0)
            {
                $val = false;
                break;
            } 
        }

        if($val){
            //restar existencia
            foreach($lstArt as $art)
            {
                DB::update("update articulos set existencia = existencia - " . $art['existencia'] . " where id =" . (int)$art['id'] . ";");
            }

            return true;
        }
        else{return false;}
    }
}
