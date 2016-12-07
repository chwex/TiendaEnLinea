@extends('layouts.admindash')

@section('encabezadocontenido')
@foreach($venta as $v)
	<h1> <center>
		Detalle de Venta con Folio: {{$venta[0]->folioventa}}
		</br>
		 </center>
	</h1>
@endforeach
@stop

@section('contenido')

	<div class="container">
		<div class="row-fluid">
			<div class="panel-heading">
				</br></br>
				<h2 align="left"><b>Venta</b></h2>
				<hr size="2px" style="color: black" align="left" width="100%" noshade="noshade">
				<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
			</div>
		</div>
	</div>
    <!--Div primer producto con total y boton pagar-->
	@foreach($prodventa as $pv)
	<div class="container"> 
		<div class="row-fluid">
			<div class="row">
				<div class="idrow" hidden>{{$pv->idproducto}}</div>
	  			<div class="col-md-20">
	  				<div class="col-md-3">
		  				<div class="col-xs-10">
		  					<div class="form-group">
		  						<label for="nProduct">{{$pv->nombreproducto}}</label>
		  						<img src="{{ asset("/Imagenes/Productos/$pv->imagen")}}" class="img-responsive" alt="no encontrada">
		  					</div>
		  				</div>
	  				</div>
	  				<div class="col-md-2">
	 	  				<div class="col-xs-14">
							<div class="form-group">
								<label for="precio">Precio</label>
								<div class="input-group">
									<span class="input-group-addon">$</span>
									<input type="text" class="form-control" name="precio" id="precio" value="{{$pv->precio}}" disabled>
								</div>	
							</div>
						</div>
	  				</div>
	  				<div class="col-md-1">
	 	  				<div class="col-xs-14">
							<div class="form-group">
								<label for="cantidad">Cantidad</label>
								<div class="input-group">
									<input type="text" class="form-control cantidades" name="cantidad" value="{{$pv->cantidad}}"  size="10" disabled>	
								</div>	
							</div>
						</div>
	  				</div>
	  			</div>
			</div>
		</div>
	</div>
	@endforeach
	<div class="col-md-3 pull-right">
		<div class="col-xs-10">
			<div class="form-group">
					<label for="total">Total a pagar</label>
				<div class="input-group">
					<span class="input-group-addon">$</span>
					<input type="text" class="form-control" name="total" id="total" value ="{{$venta[0]->total}}"  disabled>
				</div>
				<div class="form-group">
					</br>
			<button type="button" class="btn btn-success" id="btnFinalizar">Finalizar compra </button>
				</div>							
			</div>
		</div>
	</div>

@endsection
