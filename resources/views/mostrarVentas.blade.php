@extends('layouts.admindash')

@section('encabezadocontenido')
	<h1> <center>
		Ventas Registradas
		</br>
		 </center>
	</h1>
@stop

@section('contenido')

<div class="container">
  </br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Folio</th>
        <th>Fecha</th>
        <th>Usuario</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ventas as $v)
        <tr>
            <td>{{$v->folioventa}}</td>
            <td>{{$v->fecha}}</td>
            <td>{{$v->nombrecompleto}}</td>
            <td>${{$v->total}}</td>
            <td>
                <a href="{{url('/mostrarVenta')}}/{{$v->id}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-file" aria-hidden="true">Detalle</span></a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection