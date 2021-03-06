<?php

namespace App\Http\Controllers;
use App\productos;
use App\categorias;				#Añadi la tabla
use Illuminate\Http\Request;
use DB;
use App\comentarios;
use App\calificaciones;
use App\usuario;
use App\User;
use App\Http\Requests;
use Session;
use Redirect;
use App\Mail\correcompra;
use Illuminate\Support\Facades\Mail;





class productosController extends Controller
{
    public function inicio()
    {
        //obtener el usuario logeado
        if ( \Auth::check()) {
            $idu = \Auth::user()->id;
        }   
        else{
            $idu = 9;
        }


        $categorias=categorias::all();
        //consulta con productos populares
        $productosPop = DB::select("SELECT p.idproducto, p.imagen, p.nombreproducto, SUM(pv.cantidad) AS CantidadTotal
            FROM productosventas pv
            INNER JOIN productos p on pv.idproducto = p.idproducto
            GROUP BY p.idproducto, p.imagen, p.nombreproducto
            ORDER BY SUM(pv.cantidad) DESC
            LIMIT 3");
        
        //consulta con productos con descuento
        $productosDesc = DB::select('SELECT p.idproducto, p.imagen, p.nombreproducto
            FROM productosDescuento pd
            INNER JOIN productos p on pd.idproducto = p.idproducto');
        
        //consulta con los articulos(3) mas vistos por un usuario
        $productosVisUsr = DB::select('SELECT DISTINCT p.idproducto, p.imagen, p.nombreproducto, pv.visita
            FROM visitausuarioproducto pv
            INNER JOIN productos p on pv.idproducto = p.idproducto
            WHERE pv.idusuario = '. $idu .'
            ORDER BY pv.visita DESC
            LIMIT 3');
        
        //consulta con los articulos(3) mas vendidos dentro de la categoria mas visitada por el usuario
        //obtener la categoria mas visitada por el usuario
        $catVis = DB::select('SELECT idcategoria, visita
            FROM visitausuariocategoria 
            WHERE idusuario = '. $idu .'
            ORDER BY visita DESC
            LIMIT 1');

        //obtener productos mas vendidos de la categoria anteriormente seleccionada
        $prodCat = DB::select('SELECT p.idproducto, p.imagen, p.nombreproducto, SUM(pv.cantidad) AS CantidadTotal
            FROM productosventas pv
            INNER JOIN productos p on pv.idproducto = p.idproducto
            WHERE p.categoriaid = '. $catVis[0]->idcategoria .'
            GROUP BY p.idproducto, p.imagen, p.nombreproducto
            ORDER BY SUM(pv.cantidad) DESC
            LIMIT 3');

        return view('paginaprincipal', compact('categorias','productosPop', 'productosDesc', 'prodCat', 'productosVisUsr'));
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

        //registrar visita del usuario al producto en la bd
        DB::statement('call sp_visitaproducto(?,?)',array($idu,$idp));
        
        $categorias=DB::select("SELECT * FROM categorias");
        $productos=DB::select("SELECT *, c.nombrecategoria, (SELECT AVG(valor) FROM calificaciones where idproducto = " .$idp.") as promedio FROM productos p INNER JOIN categorias c on p.categoriaid = c.idcategoria WHERE idproducto = " . $idp);    
        $comentarios=DB::select("SELECT * FROM comentarios c INNER JOIN users u on c.idusuario = u.id INNER JOIN productos p on c.idproducto = p.idproducto WHERE c.estado <> 0 AND p.idproducto = " .$idp);
        $productosDescuento = DB::select('select *
                        from productos p 
                        inner join productosDescuento pd ON p.idproducto = pd.idproducto
                        where pd.idproducto = pd.idproducto');
        #$calificaciones=DB::select("SELECT * , AVG(valor) as promedio FROM calificaciones ");

       # $promedio=DB::select("SELECT AVG(valor) FROM calificaciones where idproducto = " .$idp);

        return view('/productoIndividual', compact('productos','categorias','comentarios', 'productosDescuento'));
    }



     public  function productoDetalle($idp)
    {
        if ( \Auth::check()) {
            $idu = \Auth::user()->id;
        }   
        else{
            $idu = 9;
        }

        //registrar visita del usuario al producto en la bd
        DB::statement('call sp_visitaproducto(?,?)',array($idu,$idp));
        
        $categorias=DB::select("SELECT * FROM categorias");
        $productos=DB::select("SELECT *, c.nombrecategoria, (SELECT AVG(valor) FROM calificaciones where idproducto = " .$idp.") as promedio FROM productos p INNER JOIN categorias c on p.categoriaid = c.idcategoria WHERE idproducto = " . $idp);    
        $comentarios=DB::select("SELECT * FROM comentarios c INNER JOIN users u on c.idusuario = u.id INNER JOIN productos p on c.idproducto = p.idproducto WHERE c.estado <> 0 AND  p.idproducto = " .$idp);

        #$calificaciones=DB::select("SELECT * , AVG(valor) as promedio FROM calificaciones ");

       # $promedio=DB::select("SELECT AVG(valor) FROM calificaciones where idproducto = " .$idp);

        return view('/mostrarDetalle', compact('productos','categorias','comentarios'));
    }


    public function validarExistencia($lstArt){
        //obtener todos los ids de los articulos de la venta
        $idArts = array_column($lstArt, 'idproducto');
        $val = true;
        foreach($idArts as $id)
        {
            //obtener el articulo con el id
            $articulo = $this->obtenerObjporId($id, $lstArt);

            //seleccionar la existencia del articulo
            $existencia = DB::select("select inventario from `productos` where idproducto=" . $id . ";");
            
            //validar existencia
            $ext = (int)$existencia[0]->inventario - (int)$articulo['cantidad'];

            //si ext es mayor o igual a 0, pasar al siguiente id, sino salr del bucle y abortar la venta
            if($ext < 0)
            {
                $val = false;
                break;
            } 
        }

        //si existe inventario para todos los productos descontrar la existencia de todos los productos en la venta
        if($val){
            //restar existencia
            foreach($lstArt as $art)
            {
                DB::update("update productos set inventario = inventario - " . $art['cantidad'] . " where idproducto = " . (int)$art['idproducto'] . ";");
            }

            return true;
        }
        else{return false;}
    }

    function obtenerObjporId($id, $lstArt){
        foreach($lstArt as $obj)
        {
            if($obj['idproducto'] == $id){
                return $obj;
            }
        }

        return false;
    }
}
