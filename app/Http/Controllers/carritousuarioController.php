<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comentarios;
use App\calificaciones;
use App\categorias;
use App\productos;
use App\carritousuario;
use DB;

class carritousuarioController extends Controller
{
        //mover a carrito controller?
    public function agregarCarrito($idproducto)
    {
        $categorias=categorias::all();
        $idusuario = \Auth::user()->id;
        $existe = DB::select('SELECT * FROM carritousuario WHERE idusuario=' . $idusuario .  ' AND idproducto=' . $idproducto. ' AND estado = 1;');
        if(count($existe) == 0)
        {
            DB::insert('insert into carritousuario (idusuario, idproducto, estado) values (' . $idusuario . ',' . $idproducto . ', 1);');
        }

        $productos=DB::select("SELECT * FROM productos WHERE idproducto = " . $idproducto);

        \Session::flash('mensaje', 'El producto se agregó al carrito.');
        \Session::flash('nivel', '1');

        return Redirect('/productos/' . $idproducto);
    }

    //mover a carrito controller
    public function obtenerCarrito()
    {
        $categorias=categorias::all();
        $idusuario = \Auth::user()->id;
        $productosCarrito = DB::select("select p.idproducto, u.id, p.nombreproducto, p.descripcion, p.inventario, p.precio, p.imagen, p.descuento, cat.nombrecategoria 
                        from carritousuario cu
                        inner join users u on cu.idusuario = u.id
                        inner join productos p on cu.idproducto = p.idproducto
                        inner join categorias cat on p.categoriaid = cat.idcategoria
                        where cu.estado = 1 and u.id = " . $idusuario);
        
        $productosDescuento = DB::select('select *
                        from productos p 
                        inner join productosDescuento pd ON p.idproducto = pd.idproducto
                        where pd.idproducto = pd.idproducto');

        return view('/Vistas/Micarrito', compact('productosCarrito', 'categorias', 'productosDescuento'));
    }

    public function removerProducto(Request $request)
    {
        $prodJSON = $request->all();
        $prodID = $prodJSON['idproducto'];
        DB::update('update carritousuario set estado = 0 where idproducto = ' . $prodID);

        \Session::flash('mensaje', 'Se elimino el producto del carrito.');
        \Session::flash('nivel', '1');

        return \Response::json( array(
            'venta' => true,
        ));

    }
}
