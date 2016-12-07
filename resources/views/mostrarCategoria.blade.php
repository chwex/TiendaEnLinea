@extends('layouts.admindash')

@section('encabezadocontenido')
<a href="{{url('/registrarCategoria')}}"> <input  value="Registrar categoria" class="btn btn-primary" name="registrar"></a>
@stop

@section('contenido')
<style type="text/css">
	.btn-circle {
  text-align: center;
  width: 150px;
  height: 150px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 75px;
  white-space: normal;
  color: white;
  text-transform: uppercase;
  font-weight: 700;
  opacity: 0.75;

}

.btn-circle:hover {
 color: white;
 opacity: 1;
}

</style>
<div class="container">

    <div class="row text-center" style="margin-bottom: 20px;">
    @foreach($categorias as $c)
        <a href="{{url('/productos')}}/{{$c->idcategoria}}" type="button" class="btn btn-circle" style="font-size: 100%; background-color: rgb(38, 128, 184);">{{$c->nombrecategoria}}</a>
        @endforeach
    </div>
</div>


@stop
