<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gestion de proyectos</title>
	<script src="{{asset ("js/jquery.js")}}"></script>
  <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1>
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/home')}}">GP</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link<span class="sr-only">(current)</span></a></li>
       
        <li><a href="">Asignar proyecto</a></li>
        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            <li><a href="{{url('/registroUsuario')}}">Registrar Usuario</a></li>
            <li><a href="{{url('/consultarUsuarios')}}">consultar</a></li>

            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
           
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Proyecto <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">

            <li><a href="{{url('/registroProyecto')}}">Registrar</a></li>
            <li><a href="{{url('/consultarProyecto')}}">Consulta</a></li>

            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>




      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="container">
    <div class="row">
      <div class="col-xs-12">
          @yield('encabezado')
          <hr>
          @yield('contenido')
      </div> 
    </div>
</section>

 <footer>
      <hr>
      <div class="text-center">Ingenieria web &copy; 2016</div>
 </footer>
<script src="{{asset("js/bootstrap.js")}}"></script>
</body>
</html>