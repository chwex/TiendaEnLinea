<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;
use App\ventas;
use App\categorias;
use DB;
use App\Mail\correcompra;
use Illuminate\Support\Facades\Mail;


class ventasController extends Controller
{
    public function generarVenta(Request $request){
        $vtaJSON = (array)$request->all();

        
        //checar que haya existencia de los articulos
        $artInv = true;
        $artInv = (new productosController)->validarExistencia($vtaJSON['productos']);
        
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
           

            Mail::to(\Auth::user()->email)->send(new correcompra());

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
        $ventas= DB::select("SELECT v.*, u.name as nombrecompleto
                     FROM ventas v
                     INNER JOIN users u ON u.id = v.idusuario
                     ORDER BY v.folioventa DESC");
    	return view ('mostrarVentas', compact('ventas'));
    }

    public function obtenerVentasUsuario(){
        $categorias=categorias::all();
        $idusuario = \Auth::user()->id;
        $ventas= DB::select("SELECT v.*, u.name as nombrecompleto
                     FROM ventas v
                     INNER JOIN users u ON u.id = v.idusuario
                     WHERE v.idusuario = ". $idusuario ." ORDER BY v.folioventa DESC");
    	return view ('mostrarVentasUsuario', compact('ventas','categorias'));
    }

    public function mostrarVenta($idv){
        $prodventa = DB::select("select v.id, p.nombreproducto, p.imagen, pv.idproducto, pv.cantidad, pv.precio
                        from ventas v
                        inner join productosventas pv on v.id = pv.idventa
                        inner join productos p on pv.idproducto = p.idproducto
                        where v.id = " . $idv);
        
        $venta = DB::select("select v.total, v.folioventa, v.fecha, u.name
                             from ventas v
                             inner join users u on v.idusuario = u.id
                             where v.id = " . $idv);

        return view ('mostrarVenta', compact('prodventa', 'venta'));
    }

}
