<!DOCTYPE html>
<html lang="en">
<head>
  <title>GAMES BOND - GG EZ PZ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset("/adminlte/bootstrap/css/bootstrap.min.css") }}" >
  <link rel="stylesheet" href="{{ asset("/css/inicio.css") }}" >
  
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>
<!--<div class="jumbotron" style="background-image:url('{{ asset("/Imagenes/banner.png") }}'); background-size: 100% auto; padding-bottom: 9%;">
</div>-->
<div class="container-fluid">
  <div class="row">
   <a href="{{url('/')}}"><img src="{{ asset("/Imagenes/banner.png") }}" class="img-responsive"></a> 
  </div>
</div>
<nav id="mainNav" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-left" href="#">
           <a href="{{url('/')}}"><img src="{{ asset("/Imagenes/minilogo.png") }}" width="60%" class="img-circle" alt="User Image"></a> 
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=" dropdown">
          <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
          <ul class="dropdown-menu">
             @foreach($categorias as $c)
            <li><a href="{{url('/mostrare')}}/{{$c->idcategoria}}">{{$c->nombrecategoria}}</a></li>
            @endforeach
          </ul>
        </li>
      </ul> 
      <ul class="nav navbar-nav navbar-right">
         <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Iniciar sesión</a></li>
            <li><a href="{{ url('/register') }}">Registro</a></li>
        @else
        @if(Auth::user()->admin == 0)
           <li>
              <a href="{{url('/micarrito')}}"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a>
           </li>
        @endif
        @if(Auth::user()->admin == 1)
            <li>
                <a href="{{url('/admin')}}">Panel de administración</a>
            </li>
            <li>
              <a href="{{url('/micarrito')}}"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a>
            </li>
        @endif
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li>
                   <a href="{{ url('/mostrarVentasUsuario') }}">Historial de Compras</a> 
                </li>
                <li>
                    <a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        Cerrar sesion
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
        @endif
     
      </ul>
      
    </div>
  </div>
</nav>
<div class="alerta" id="mensajeAlerta">
    <strong> </strong>
    <label> </label>
</div>
  <div class="container">
  </br></br>
      @yield('contenido')
      </br></br>
  </div>
<footer class="container-fluid text-center">
  <p>Games Bond Copyright</p>
  <div class="container">
    
    <div class="row">
            <div class="col-xs-4">
                <p class="text-muted pull-right">© 2016 Company Name. All rights reserved</p>
            </div>
        </div>
</div>
</footer>
    <script src="{{ asset("/adminlte/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
    <script src="{{ asset("/adminlte/bootstrap/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("/js/inicio.js") }}"></script>
    @yield('scripts')
    @if(session()->has('mensaje'))
    <script>GenerarMensaje({{ Session::get('nivel') }},'{{ Session::get('mensaje') }}')</script>
    @endif
</body>
</html>