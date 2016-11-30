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
        $existe = DB::select('SELECT * FROM carritousuario WHERE idusuario=' . $idusuario .  ' AND idproducto=' . $idproducto. ';');
        if(count($existe) == 0)
        {
            DB::insert('insert into carritousuario (idusuario, idproducto) values (' . $idusuario . ',' . $idproducto . ');');
        }

        $productos=DB::select("SELECT * FROM productos WHERE idproducto = " . $idproducto);
        $categorias = categorias::all();

        return Redirect('/productos/' . $idproducto);
    }

    //mover a carrito controller
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
