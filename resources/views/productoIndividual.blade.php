@extends('layouts.inicio')


@section('contenido')
<style>
            /****** Rating Starts *****/
            @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

            fieldset, label { margin: 0; padding: 0; }
            body{ margin: 20px; }
            h1 { font-size: 1.5em; margin: 10px; }

            .rating { 
                border: none;
                float: left;
            }

            .rating > input { display: none; } 
            .rating > label:before { 
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .rating > .half:before { 
                content: "\f089";
                position: absolute;
            }

            .rating > label { 
                color: #ddd; 
                float: right; 
            }

            .rating > input:checked ~ label, 
            .rating:not(:checked) > label:hover,  
            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  }

            .rating > input:checked + label:hover, 
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label, 
            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }     


          

</style>
<div class="container-fluid">
	<div class="row">
  		<div class="col-md-12">
       		<h3>Detallado de Producto</h3>
    	</div>
  	</div>
  	<div class="row">
    	<div class="col-md-8 col-xs-10">
    		<div class="panel panel-default">
     			@foreach($productos as $p)
            	<div class="panel-body">
			  		<div class="row">
			  			<div class="col-xs-12 col-sm-4 text-center">
							<img src="{{ asset("/Imagenes/Productos/$p->imagen")}}" alt="" class="center-block img-circle img-responsive">
								<ul class="list-inline ratings text-center" title="Ratings">
								  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
								  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
								  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
								  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
								  <li><a href="#"><span class="fa fa-star fa-lg"></span></a></li>
								</ul>
						</div>
						<div class="col-xs-12 col-sm-8">
							<h2>{{$p -> nombreproducto}}</h2>
								
								<p><strong>Categoria: </strong> {{$p -> categoriaid }} </p>
							
								<p><strong>Calificacion: </strong>
									<span class="label label-info tags">Mala</span> 
									<span class="label label-info tags">Regular</span>
									<span class="label label-info tags">Buena</span>
									<span class="label label-info tags">Excelente</span>
								</p>
								<p>
									 <fieldset id='demo1' class="rating">
                        <input class="stars" type="radio" id="star5" name="rating" value="5" />
                        <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4" name="rating" value="4" />
                        <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3" name="rating" value="3" />
                        <label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2" name="rating" value="2" />
                        <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1" name="rating" value="1" />
                        <label class = "full" for="star1" title="Sucks big time - 1 star"></label>

                    </fieldset>
								</p>
								<p><strong>Existencia: </strong> {{$p -> inventario}} </p>
						</div><!--/col-->          
					</div> 
					<div class="col-xs-12 col-sm-4">
						<h2><strong>${{$p->precio}} </strong></h2>                    
						<form action="{{ url('/agregarCarrito') }}">
							<button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Agregar a carrito </button>
						</form>
					</div>
					<div>
					@foreach($comentarios as $c)
						<texblock>  {{$c->name}}</texblock>
						<textarea>{{$c-> mensaje}}</textarea>
					@endforeach
					</div>

					 <!-- Contact form -->
					<div class="panel-body">
        				<div class="col-xs-12">
          					<form role="form" name="ajax-form" id="ajax-form" action="{{url('/guardarComentario')}}" method="POST" class="form-main">
          					<input type="hidden" name="_token" value="{{csrf_token() }}">
            					<div class="form-group">
            					</br><hr style="color: #0056b2;" /></br>
              						
              							<input style="display: none;" class="form-control" id="idproducto" name="idproducto" type="text" onfocus="if(this.value == '{{$p->idproducto}}') this.value='';" onblur="if(this.value == '') this.value='{{$p->idproducto}}';" value="{{$p->idproducto}}">
              							<div class="error" id="err-emailvld" style="display: none;">E-mail is not a valid format</div> 
            					</div> <!-- /Form-email -->


            					<div class="form-group">
              						<label for="mensaje">Comentarios:</label>
              						<textarea class="form-control" id="mensaje" name="mensaje" rows="5" onblur="if(this.value == '') this.value='mensaje'" onfocus="if(this.value == 'mensaje') this.value=''">Escribir comentario...</textarea>
									<div class="error" id="err-message" style="display: none;"></div>
            					</div> 
            					<div class="row">            
              						<div class="col-xs-12">
                						<button type="submit" class="btn btn-primary btn-shadow btn-rounded w-md" id="send">Enviar</button>
              						</div> 
            					</div> <!-- /row -->


          					</form> <!-- /form -->
        				</div> <!-- end col -->
        			</div>
				@endforeach     
				</div>
			</div>
		</div>
    </div>
</div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
                        $(document).ready(function () {
                            $("#demo1 .stars").click(function () {
                           
                                $.post('rating.php',{rate:$(this).val()},function(d){
                                    if(d>0)
                                    {
                                        alert('You already rated');
                                    }else{
                                        alert('Thanks For Rating');
                                    }
                                });
                                $(this).attr("checked");
                            });
                        });
                    </script>
@stop
