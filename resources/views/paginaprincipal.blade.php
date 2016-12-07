@extends('layouts.inicio')

@section('contenido')
<style type="text/css">
  /* Removes the default 20px margin and creates some padding space for the indicators and controls */
.carousel {
    margin-bottom: 0;
  padding: 0 40px 30px 40px;
}
/* Reposition the controls slightly */
.carousel-control {
  left: -12px;
}
.carousel-control.right {
  right: -12px;
}
/* Changes the position of the indicators */
.carousel-indicators {
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the colour of the indicators */
.carousel-indicators li {
  background: #c0c0c0;
}
.carousel-indicators .active {
background: #333333;
}
.well img {
    margin:0 1em;
    }
</style>


<div class="container">

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner container" role="listbox">
    <div class="item active">
      <img src="{{ asset("/Imagenes/car1.jpg") }}" alt="Image" style="width:1000px; height: 400px;" />
      <div class="carousel-caption">
  
      </div>
    </div>
    <div class="item">
     <img src="{{ asset("/Imagenes/car2.jpg") }}" alt="Image" style="width:1000px; height: 400px;" />
      <div class="carousel-caption">
       
      </div>
    </div>
     <div class="item">
     <img src="{{ asset("/Imagenes/car3.jpg") }}" alt="Image" style="width:1000px; height: 400px;" />
      <div class="carousel-caption">
    
      </div>
     </div>
      <div class="item">
      <img src="{{ asset("/Imagenes/car4.jpg") }}" alt="Image" style="width:1000px; height: 400px;" />
      <div class="carousel-caption">
      
      </div>
    </div>
    <div class="item">
     <img src="{{ asset("/Imagenes/car5.jpg") }}" alt="Image" style="width:1000px; height: 400px;"/>
      <div class="carousel-caption">
        
      </div>
    </div>
     <div class="item">
     <img src="{{ asset("/Imagenes/car6.jpg") }}" alt="Image" style="width:1000px; height: 400px;"/>
    
      </div>
    </div>
 
  </div>

</div>
  
  <div class="row">  
   <?php $pos = 1; ?>
   @foreach($productosPop as $pp)
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">Productos Destacado:   </div>
        <div class="panel-body"><a href="{{ url('/productos')}}/{{$pp->idproducto}}"><img src="{{ asset("/Imagenes/Productos/$pp->imagen") }}" class="img-responsive" style="width:400px; height: 400px;" alt="Image"></a></div>
        <div class="panel-footer"><a href="{{ url('/productos')}}/{{$pp->idproducto}}"><center>{{$pp->nombreproducto}}</center></a></div>
      </div>
    </div>
    <?php $pos++; ?> 
    @endforeach 

  </div>
</div>  
</div><br>
<script>
  $(document).ready(function() {
    $('#myCarousel').carousel({
        interval: 5000
    })
});
</script>
@stop