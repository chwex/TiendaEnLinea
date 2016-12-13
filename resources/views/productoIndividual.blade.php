@extends('layouts.inicio')


@section('contenido')

<style type="text/css">
@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
.col-item
{
    border: 1px solid #E1E1E1;
    border-radius: 5px;
    background: #FFF;
}
.col-item .photo img
{
    margin: 0 auto;
    width: 100%;
}

.col-item .info
{
    padding: 10px;
    border-radius: 0 0 5px 5px;
    margin-top: 1px;
}

.col-item:hover .info {
    background-color: #F5F5DC;
}
.col-item .price
{
    /*width: 50%;*/
    float: left;
    margin-top: 5px;
}

.col-item .price h5
{
    line-height: 20px;
    margin: 0;
}

.price-text-color
{
    color: #219FD1;
}

.col-item .info .rating
{
    color: #777;
}

.col-item .rating
{
    /*width: 50%;*/
    float: left;
    font-size: 17px;
    text-align: right;
    line-height: 52px;
    margin-bottom: 10px;
    height: 52px;
}

.col-item .separator
{
    border-top: 1px solid #E1E1E1;
}

.clear-left
{
    clear: left;
}

.col-item .separator p
{
    line-height: 20px;
    margin-bottom: 0;
    margin-top: 10px;
    text-align: center;
}

.col-item .separator p i
{
    margin-right: 5px;
}
.col-item .btn-add
{
    width: 50%;
    float: left;
}

.col-item .btn-add
{
    border-right: 1px solid #E1E1E1;
}

.col-item .btn-details
{
    width: 50%;
    float: left;
    padding-left: 10px;
}
.controls
{
    margin-top: 20px;
}
[data-slide="prev"]
{
    margin-right: 10px;
}

}
</style>
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
							@if($p->descuento == 1)  
								<img id="image2" src="http://www.freshbitescardiff.co.uk/wp-content/uploads/2013/04/15_percent_off.png" style="max-width:30%;" alt="..." />
							@endif
						</div>
						<div class="col-xs-12 col-sm-8">
							<h2>{{$p -> nombreproducto}}</h2>
							

							<p><strong>Categoria: </strong> {{$p -> nombrecategoria }} </p>
							<p><strong>Existencia: </strong> {{$p -> inventario}} </p>
							<p>
								@for($i=0; $i<$p->promedio;$i++)
									<span class="price-text-color fa fa-star"></span>
								@endfor
								@for($i=$p->promedio; $i<5;$i++)
									<span class="fa fa-star"></span>
								@endfor
							</p>
						</div>        
					</div> 
					<div class="col-xs-12 col-sm-4">
						<h2><strong id="precio">${{$p->precio}} </strong></h2>

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
@section('scripts')
	<script>
	var rawproductos = '<?php echo json_encode($productos); ?>';
	var rawproddesc = '<?php echo json_encode($productosDescuento); ?>';
	var prod = JSON.parse(rawproductos);
	var prodDescuento = JSON.parse(rawproddesc);


        for(var desc in prodDescuento){
            if(prod[0].idproducto == prodDescuento[desc].idproducto){
                $('#precio').html('$'+prodDescuento[desc].precioDescuento);
            }
        }
    
	</script>
@endsection
