@extends('layouts.inicio')


@section('contenido')
<div class="container-fluid">
	<div class="row">
  		<div class="col-md-12">
       		<h3>Detallado de Producto</h3>
    	</div>
    	<div class="col-md-8 col-xs-10">
    		<div class="panel panel-default">
     			@foreach($productos as $p)
            	<div class="panel-body">
			  		<div class="row">
			  			<div class="col-xs-12 col-sm-4 text-center">
							<img src="{{ asset("/Imagenes/Productos/$p->imagen")}}" alt="" class="center-block img-circle img-responsive">
						</div>
						<div class="col-xs-12 col-sm-8">
							<h2>{{$p -> nombreproducto}}</h2>
							
							<p><strong>Categoria: </strong> {{$p -> nombrecategoria }} </p>
							<p><strong>Existencia: </strong> {{$p -> inventario}} </p>
							<p><strong>Calificacion: </strong>
								@for($i=0; $i<$p->promedio;$i++)
									<span class="glyphicon glyphicon-star"></span>
								@endfor
								@for($i=$p->promedio; $i<5;$i++)
									<span class="glyphicon glyphicon-star-empty"></span>
								@endfor
							</p>
						</div>        
					</div> 
					<div class="col-xs-12 col-sm-4">
						<h2><strong>${{$p->precio}} </strong></h2>

						@if(!Auth::guest())                    
							<form action="{{ url('/agregarCarrito')}}/{{$p->idproducto}}">
								<button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Agregar a carrito </button>
							</form>
						@endif
					</div>

					 <!-- Contact form -->
					<div class="panel-body">
        				<div class="col-xs-12">
          					<form role="form" name="ajax-form" id="ajax-form" action="{{url('/guardarComentario')}}" method="POST" class="form-main">
          					<input type="hidden" name="_token" value="{{csrf_token() }}">
            					<div class="form-group">
            					</br><hr style="color: #0056b2;" /></br>
            					<div>
									<h3>Comentarios del producto:</h3>
									@foreach($comentarios as $c)
										<label>{{$c->name}} comento:</label>
										<p>{{$c-> mensaje}}</p>
									@endforeach
									</div>

              						</br>
              							<input style="display: none;" class="form-control" id="idproducto" name="idproducto" type="text" onfocus="if(this.value == '{{$p->idproducto}}') this.value='';" onblur="if(this.value == '') this.value='{{$p->idproducto}}';" value="{{$p->idproducto}}">
              							<div class="error" id="err-emailvld" style="display: none;">E-mail is not a valid format</div> 
            					</div> <!-- /Form-email -->

								@if(!Auth::guest()) 
            					<div class="form-group">
              						<label for="mensaje">Comentarios:</label>
              						<textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Escribir comentario..."></textarea>
									<div class="error" id="err-message" style="display: none;"></div>
									
									<div class="form-group">
									<label>Calificar producto:</label>
										<select class="form-control" name="calificacion">
										<option value="1">Uno</option>
										<option value="2">Dos</option>
										<option value="3">Tres</option>
										<option value="4">Cuatro</option>
										<option value="5">Cinco</option>
										</select>
									</div>
            					
            					<div class="row">            
              						<div class="col-xs-12">
                						<button type="submit" class="btn btn-primary btn-shadow btn-rounded w-md" id="send">Enviar</button>
              						</div> 
            					</div> <!-- /row -->
            					</div>
								@endif

          					</form> <!-- /form -->
        				</div> <!-- end col -->
        			</div>
				@endforeach     
				</div>
			</div>
		</div>
	</div>
</div>
@stop
