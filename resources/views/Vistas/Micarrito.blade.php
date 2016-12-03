@extends('layouts.inicio')

@section('contenido')
	<div class="container">
		<div class="row-fluid">
			<div class="panel-heading">
				</br></br>
				<h2 align="left"><b>Mi carrito</b></h2>
				<hr size="2px" style="color: black" align="left" width="100%" noshade="noshade">
				<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
			</div>
		</div>
	</div>
<!--Div primer producto con total y boton pagar-->
	@foreach($productosCarrito as $pc)
	<div class="container"> 
		<div class="row-fluid">
			<div class="row">
				<div class="idrow" hidden>{{$pc->idproducto}}</div>
	  			<div class="col-md-20">
	  				<div class="col-md-3">
		  				<div class="col-xs-10">
		  					<div class="form-group">
		  						<label for="nProduct">{{$pc->nombreproducto}}</label>
		  						<img src="{{ asset("/Imagenes/Productos/$pc->imagen")}}" class="img-responsive" alt="no encontrada">
		  					</div>
		  				</div>
	  				</div>
	  				<div class="col-md-3">
	  					<div class="col-xs-1">
		  					<div class="form-group">
	  							<label for="comment">Descripcion:</label>
	  							<textarea name="textarea" id="comment" disabled>{{$pc->descripcion}}</textarea>
							</div>
	  					</div>	
	  				</div>
	  				<div class="col-md-2">
	 	  				<div class="col-xs-14">
							<div class="form-group">
								<label for="precio">Precio</label>
								<div class="input-group">
									<span class="input-group-addon">$</span>
									<input type="text" class="form-control" name="precio" id="precio" value="{{$pc->precio}}" disabled>
								</div>	
							</div>
						</div>
	  				</div>
	  				<div class="col-md-1">
	 	  				<div class="col-xs-14">
							<div class="form-group">
								<label for="cantidad">Cantidad</label>
								<div class="input-group">
									<input type="text" class="form-control cantidades" name="cantidad" value="1"  size="10">	
								</div>	
							</div>
						</div>
	  				</div>
					  <div class="col-md-1">
	 	  				<div class="col-xs-14">
							<div class="form-group">
								<label for="cantidad"></label>
								<div class="input-group">
									<a href="#" class="btn btn-danger" id="btnRemover">
	        							<span class="glyphicon glyphicon-remove"></span> Remover
	      							</a>	
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
					<input type="text" class="form-control" name="total" id="total" disabled>
				</div>
				<div class="form-group">
					</br>
					<button type="button" class="btn btn-success" id="btnFinalizar">Finalizar compra </button>
				</div>							
			</div>
		</div>
	</div>
@endsection

@section('scripts')
<script>
	var rawproductos = '<?php echo json_encode($productosCarrito); ?>';
	var prodAgregados = JSON.parse(rawproductos);
</script>

<script src="{{ asset("/js/ventas.js") }}"></script>
@endsection


	{{--<div class="container">
		<div class="row-fluid">
			<div class="row">
				<div class="col-md-3">
					<div class="col-xs-10">					
					</div>					
				</div>
				<h4 align="left"><b>También te puede interesar:</b></h4>
			</div>
		</div>
	</div>
 <!-- sabados de Carrucel-->
	-- <div class="container">
	--	<div class="row-fluid">
	--		<div class="row">
	--			<div class="col-md-20">
	--				<div id="myCarousel" class="carousel slide" data-ride="carousel">
	--				  <!-- Indicators -->
	--				  <ol class="carousel-indicators">
	--				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	--				    <li data-target="#myCarousel" data-slide-to="1"></li>
	--				    <li data-target="#myCarousel" data-slide-to="2"></li>
	--				    <li data-target="#myCarousel" data-slide-to="3"></li>
	--				  </ol>
	--				  <!-- Wrapper for slides -->
	--				  <div class="carousel-inner" role="listbox">
	--				    <div class="item active">
	--				      <img src="escritorio.jpg" alt="Chania">
	--				      <div class="carousel-caption">
	--				        <h3>HP-Escritorio</h3>
	--				        <p>Chila</p>
	--				      </div>
	--				    </div>
	--				    <div class="item">
	--				      <img src="lap.jpg" alt="Chania">
	--				      <div class="carousel-caption">
	--				        <h3>Lenovo-Laptop</h3>
	--				        <p>Chingona</p>
	--				      </div>
	--				    </div>
	--				    <div class="item">
	--				      <img src="mac.jpg" alt="Flower">
	--				      <div class="carousel-caption">
	--				        <h3>Mac</h3>
	--				        <p>Na, no me gustan</p>
	--				      </div>
	--				    </div>
	--				    <div class="item">
	--				      <img src="all.jpg" alt="Flower">
	--				      <div class="carousel-caption">
	--				        <h3>All in One</h3>
	--				        <p>Maximo 4 años duran</p>
	--				      </div>
	--				    </div>
	--				  </div>
	--				  <!-- Left and right controls -->
	--				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	--				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	--				    <span class="sr-only">Previous</span>
	--				  </a>
	--				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	--				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	--				    <span class="sr-only">Next</span>
	--				  </a>
	--				</div>
	--			</div>
	--		</div>
	--	</div>
	-- </div> --}}