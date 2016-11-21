@extends('layouts.inicio')

@section('contenido')
    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mainCarousel" data-slide-to="1"></li>
    <li data-target="#mainCarousel" data-slide-to="2"></li>
    <li data-target="#mainCarousel" data-slide-to="3"></li>
    <li data-target="#mainCarousel" data-slide-to="4"></li>
    <li data-target="#mainCarousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img-responsive center-block" src="{{ asset("/Imagenes/car1.jpg") }}" alt="Image" style="width: 150px; height: 150px;">
      <div class="carousel-caption">
        <h3>Carreras</h3>
        <p></p>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive center-block" src="{{ asset("/Imagenes/car2.jpg") }}" alt="Image" style="width: 150px; height: 150px;">
      <div class="carousel-caption">
        <h3>FarCry</h3>
        <p></p>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive center-block" src="{{ asset("/Imagenes/car3.jpg") }}" alt="Image" style="width: 150px; height: 150px;">
      <div class="carousel-caption">
        <h3>Nintendo</h3>
        <p></p>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive center-block" src="{{ asset("/Imagenes/car4.jpg") }}" alt="Image" style="width: 150px; height: 150px;">
      <div class="carousel-caption">
        <h3>Surgeon Simulator</h3>
        <p></p>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive center-block" src="{{ asset("/Imagenes/car5.jpg") }}" alt="Image" style="width: 150px; height: 150px;">
      <div class="carousel-caption">
        <h3>Social Media</h3>
        <p></p>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive center-block" src="{{ asset("/Imagenes/car6.jpg") }}" alt="Image" style="width: 150px; height: 150px;">
      <div class="carousel-caption">
        <h3>League of Legends</h3>
        <p></p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#mainCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mainCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
  <div class="row">  
   <?php $pos = 1; ?>
   @foreach($productosPop as $pp)
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">Producto Destacado #{{$pos}}  </div>
        <div class="panel-body"><img src="{{ asset("/Imagenes/Productos/$pp->imagen") }}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">{{$pp->nombreproducto}}</div>
      </div>
    </div>
    <?php $pos++; ?> 
    @endforeach 

  </div>
  
</div><br>
@stop