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
        <img width="60%" src="{{ asset("/Imagenes/minilogo.png") }}" alt="Image">
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
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
      
    </div>
  </div>
</nav>

  <div class="container">
  </br></br>
      @yield('contenido')
  </div>
<footer class="container-fluid text-center">
  <p>Games Bond Copyright</p>
  <div class="container">
    <div class="row">
            <div class="col-xs-3">
                <ul class="list-unstyled">
                    <li>GitHub<li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact & support</a></li>
                    <li><a href="#">Enterprise</a></li>
                    <li><a href="#">Site status</a></li>
                </ul>
            </div>
            <div class="col-xs-3">
                <ul class="list-unstyled">
                    <li>Applications<li>
                    <li><a href="#">Product for Mac</a></li>
                    <li><a href="#">Product for Windows</a></li>
                    <li><a href="#">Product for Eclipse</a></li>
                    <li><a href="#">Product mobile apps</a></li>
                </ul>
            </div>
            <div class="col-xs-3">
                <ul class="list-unstyled">
                    <li>Services<li>
                    <li><a href="#">Web analytics</a></li>
                    <li><a href="#">Presentations</a></li>
                    <li><a href="#">Code snippets</a></li>
                    <li><a href="#">Job board</a></li>
                </ul>
            </div>
            <div class="col-xs-3">
                <ul class="list-unstyled">
                    <li>Documentation<li>
                    <li><a href="#">Product Help</a></li>
                    <li><a href="#">Developer API</a></li>
                    <li><a href="#">Product Markdown</a></li>
                    <li><a href="#">Product Pages</a></li>
                </ul>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="col-xs-8">
                <ul class="list-unstyled list-inline pull-left">
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
            </div>
            <div class="col-xs-4">
                <p class="text-muted pull-right">© 2015 Company Name. All rights reserved</p>
            </div>
        </div>
</div>
</footer>

<script src="{{ asset("/adminlte/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<script src="{{ asset("/adminlte/bootstrap/js/bootstrap.min.js") }}"></script>

</body>
</html>