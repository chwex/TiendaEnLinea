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




.testimonials-v-2 {
  padding: 100px 0;
  overflow: hidden;
}

.testi-slide {
  text-align: center;
}

.testi-slide img {
  width: 92px;
  height: 92px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}

.testi-slide p {
  margin: 20px 0;
  font-size: 16px;
  font-weight: 400;
  line-height: 30px;
  font-style: italic;
}

.testi-slide i {
  color: #32c5d2;
  margin-right: 10px;
}

.testi-slide h4 {
  font-weight: 400;
  font-size: 16px;
  font-family: "Lato", sans-serif !important;
  font-style: italic;
}

.testi-slide .flex-control-paging li a {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  box-shadow: none;
  background: transparent !important;
  border: 2px solid #ccc;
  width: 8px;
  height: 8px;
}

.testi-slide .flex-control-paging li a.flex-active {
  background: transparent !important;
  border: 2px solid #32c5d2;
}

.quote {
  position: relative;
}

.quote blockquote {
  padding: 0px;
  border: 0;
  margin: 0;
  font-size: 14px;
  font-style: italic;
  -webkit-border-radius: 8px;
  -moz-border-radius: 8px;
  -ms-border-radius: 8px;
  border-radius: 8px;
}

.quote blockquote p {
  color: #fff;
  padding-top: 25px;
  padding-bottom: 45px;
  padding-left: 30px;
  padding-right: 30px;
}

.quote blockquote:before {
  content: "";
  position: absolute;
  top: 100%;
  left: 90px;
  width: 0;
  height: 0;
  border-top: 0.83333em solid #ccc;
  border-right: 0.86667em solid transparent;
}

.quote.green blockquote {
  background-color: #32c5d2;
}

.quote.green blockquote:before {
  border-top-color: #32c5d2;
}

.quote.dark blockquote {
  background-color: #555;
}

.quote.dark blockquote:before {
  border-top-color: #555;
}

.quote-footer {
  margin: 10px 0;
}

.quote-footer .quote-author-img img {
  float: left;
  max-width: 90px;
  width: 90px;
  height: 90px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
  margin-left: -5px;
  margin-top: -40px;
  position: relative;
  z-index: 1;
  padding: 5px;
  background-color: #fff;
}

.quote-footer h4 {
  font-size: 14px;
  margin-bottom: 4px;
}

.quote-footer p {
  font-weight: 400;
  font-style: italic;
  font-size: 14px;
}




#footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 280px;
  background: 
  /* color overlay */ 
    linear-gradient(
      rgba(240, 212, 0, 0.45), 
      rgba(0, 0, 0, 0.45)
    ),
    /* image to overlay */
    url(http://images.cdn.fotopedia.com/_avPIZmqM3w-7z161LH_268-hd.jpg);
}


/* Custom footer CSS
-------------------------------------------------- */

.footertext {
  color: black;
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
           <a href="{{url('/')}}"><img src="{{ asset("/Imagenes/minilogo.png") }}" style="width:50px;" class="img-responsive" alt="User Image"></a> 
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

    <div class="row">
      <center><p>Games Bond Copyright © 2016</p></center>
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