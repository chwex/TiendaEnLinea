<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ventasController extends Controller
{
    public function generarVenta(Request $request){
        $vtaJSON = $request->all();
        //checar que haya existencia de los articulos
        $artInv = true;
        //$artInv = (new articulosController)->validarExistencia($vtaJSON['articulos']);
        

        //si hay existencia, se genera la venta
        if($artInv){
            $id = $vtaJSON['idventa'];
            $venta = ventas::find($id);
            $venta->folio = $vtaJSON['folio'];
            $venta->total = $vtaJSON['total'];
            $venta->idcliente = $vtaJSON['idCliente'];
            $dt = new DateTime();
            $venta->fecha= $dt->format('Y-m-d H:i:s');

            $venta->save();
            
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
