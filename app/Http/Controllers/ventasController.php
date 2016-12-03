<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;
use App\ventas;
use DB;

class ventasController extends Controller
{
    public function generarVenta(Request $request){
        $vtaJSON = (array)$request->all();

        //checar que haya existencia de los articulos
        $artInv = true;
        //$artInv = (new articulosController)->validarExistencia($vtaJSON['articulos']);
        
        //si hay existencia, se genera la venta
        if($artInv){

            //generar codigo de venta
            $claveaa = DB::select("SELECT id FROM ventas order by id desc limit 1");
            $clavefinal = (string)((int)$claveaa[0]->id + 1);
            
            while (strlen($clavefinal) < 5):
                $clavefinal = "0" . $clavefinal;
            endwhile;

            $clavefinal = "V-" . $clavefinal;

            //guardar venta
            $venta = new ventas;
            $venta->folioventa = $clavefinal;
            $venta->total = $vtaJSON['totalvta'];
            $venta->idusuario = \Auth::user()->id;
            $venta->save();
            $ventaid = $venta->id;

            //ligar la informacion de los productos con la venta
           foreach($vtaJSON['productos'] as $p){
               DB::insert('insert into productosventas (idventa, idproducto, cantidad, precio) values (?, ?, ?, ?)', [$ventaid, $p['idproducto'], $p['cantidad'], $p['precio']]);
               DB::update('update carritousuario set estado = 0 where idproducto = ' . $p['idproducto']);
           }
            
            \Session::flash('mensaje', 'Se guardo la venta correctamente.');
            \Session::flash('nivel', '1');

            return \Response::json( array(
                'venta' => $venta,
            ));
        }
        else{
            return \Response::json( array(
                'venta' => false,
            ));
        }
    }

    public function obtenerVentas(){

    }

    public function obtenerVentasUsuario(){

    }
}
