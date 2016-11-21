@extends('layouts.inicio')


@section('contenido')

<link rel="stylesheet" href="{{ asset("/css/mproducto.css") }}" >

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
  <div class="row">
    <div class="col-sm-4 col-md-3">
      <form>
        <div class="well">
          <div class="row">
            <div class="col-sm-12">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search products...">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </div>
          </div>
        </div>
      </form>

      <!-- Filter -->
      <form class="shop__filter">
        <!-- Price -->
        <h3 class="headline">
          <span>Price</span>
        </h3>
        <div class="radio">
          <input type="radio" name="shop-filter__price" id="shop-filter-price_1" value="" checked="">
          <label for="shop-filter-price_1">Under $25</label>
        </div>
        <div class="radio">
          <input type="radio" name="shop-filter__price" id="shop-filter-price_2" value="">
          <label for="shop-filter-price_2">$25 to $50</label>
        </div>
        <div class="radio">
          <input type="radio" name="shop-filter__price" id="shop-filter-price_3" value="">
          <label for="shop-filter-price_3">$50 to $100</label>
        </div>
        <div class="radio">
          <input type="radio" name="shop-filter__price" id="shop-filter-price_4" value="specify">
          <label for="shop-filter-price_4">Other (specify)</label>
        </div>
        <div class="form-group shop-filter__price">
          <div class="row">
            <div class="col-xs-4">
              <label for="shop-filter-price_from" class="sr-only"></label>
              <input id="shop-filter-price_from" type="number" min="0" class="form-control" placeholder="From" disabled="">
            </div>
            <div class="col-xs-4">
              <label for="shop-filter-price_to" class="sr-only"></label>
              <input id="shop-filter-price_to" type="number" min="0" class="form-control" placeholder="To" disabled="">
            </div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-block btn-default" disabled="">Go</button>
            </div>
          </div>
        </div>

        <!-- Checkboxes -->
        <h3 class="headline">
          <span>Brand</span>
        </h3>
        <div class="checkbox">
          <input type="checkbox" value="" id="shop-filter-checkbox_1" checked="">
          <label for="shop-filter-checkbox_1">Adidas</label>
        </div>
        <div class="checkbox">
          <input type="checkbox" value="" id="shop-filter-checkbox_2">
          <label for="shop-filter-checkbox_2">Calvin Klein</label>
        </div>
        <div class="checkbox">
          <input type="checkbox" value="" id="shop-filter-checkbox_3">
          <label for="shop-filter-checkbox_3">Columbia</label>
        </div>
        <div class="checkbox">
          <input type="checkbox" value="" id="shop-filter-checkbox_4">
          <label for="shop-filter-checkbox_4">Tommy Hilfiger</label>
        </div>
        <div class="checkbox">
          <input type="checkbox" value="" id="shop-filter-checkbox_5">
          <label for="shop-filter-checkbox_5">Not specified</label>
        </div>

        <!-- Radios -->
        <h3 class="headline">
          <span>Material</span>
        </h3>
        <div class="radio">
          <input type="radio" name="shop-filter__radio" id="shop-filter-radio_1" value="" checked="">
          <label for="shop-filter-radio_1">100% Cotton</label>
        </div>
        <div class="radio">
          <input type="radio" name="shop-filter__radio" id="shop-filter-radio_2" value="">
          <label for="shop-filter-radio_2">Bamboo</label>
        </div>
        <div class="radio">
          <input type="radio" name="shop-filter__radio" id="shop-filter-radio_3" value="">
          <label for="shop-filter-radio_3">Leather</label>
        </div>
        <div class="radio">
          <input type="radio" name="shop-filter__radio" id="shop-filter-radio_4" value="">
          <label for="shop-filter-radio_4">Polyester</label>
        </div>
        <div class="radio">
          <input type="radio" name="shop-filter__radio" id="shop-filter-radio_5" value="">
          <label for="shop-filter-radio_5">Not specified</label>
        </div>

        <!-- Colors -->
        <h3 class="headline">
          <span>Colors</span>
        </h3>
        <div class="shop-filter__color">
          <input type="text" id="shop-filter-color_1" value="" data-input-color="black">
          <label for="shop-filter-color_1" style="background-color: black;"></label>
        </div>
        <div class="shop-filter__color">
          <input type="text" id="shop-filter-color_2" value="" data-input-color="gray">
          <label for="shop-filter-color_2" style="background-color: gray;"></label>
        </div>
        <div class="shop-filter__color">
          <input type="text" id="shop-filter-color_3" value="" data-input-color="brown">
          <label for="shop-filter-color_3" style="background-color: brown;"></label>
        </div>
        <div class="shop-filter__color">
          <input type="text" id="shop-filter-color_4" value="" data-input-color="beige">
          <label for="shop-filter-color_4" style="background-color: beige;"></label>
        </div>
        <div class="shop-filter__color">
          <input type="text" id="shop-filter-color_5" value="" data-input-color="white">
          <label for="shop-filter-color_5" style="background-color: white;"></label>
        </div>
      </form>
    </div>
    
    <div class="col-sm-8 col-md-9">
      <!-- Filters -->
      <ul class="shop__sorting">
        <li class="active"><a href="#">Popular</a></li>
        <li><a href="#">Newest</a></li>
        <li><a href="#">Bestselling</a></li>
        <li><a href="#">Price (low)</a></li>
        <li><a href="#">Price (high)</a></li>
      </ul>

      <div class="row">
        <div class="col-sm-6 col-md-4">
        @foreach ($productos as $p)
          <div class="shop__thumb">
            <a href="#">
              <div class="shop-thumb__img">
                <img src="http://lorempixel.com/400/400/technics/1/" class="img-responsive" alt="...">
              </div>
              <h5 class="shop-thumb__title">
                {{$p->nombreproducto}}
              </h5>
              <div class="shop-thumb__price">
                <span class="shop-thumb-price">${{$p->precio}}</span>
              </div>
            </a>
          </div>
          @endforeach
        </div>    
      </div> <!-- / .row -->

      <!-- Pagination -->
      <div class="row">
        <div class="col-sm-12">

          <ul class="pagination pull-right">
            <li class="disabled"><a href="#">«</a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">»</a></li>
          </ul>
          
        </div>
      </div> <!-- / .row -->
      
    </div> <!-- / .col-sm-8 -->
  </div> <!-- / .row -->
</div>
@stop