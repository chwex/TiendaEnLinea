<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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

<div class="jumbotron">
  <div class="container text-center">
    <h1>Online Store</h1>
    <p>Mission, Vission & Values</p>
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
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class=" dropdown">
          <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
          <ul class="dropdown-menu">
            @foreach($categorias as $c)
            <li><a href="{{url('/listadoCategoria')}}/{{$c->id}}">{{$c->nombrecategoria}}</a></li>
            @endforeach
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
      
    </div>
  </div>
</nav>

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
      <img class="img-responsive center-block" src="{{ asset("/Imagenes/car1.jpg") }}" alt="Image">
      <div class="carousel-caption">
        <h3>Carreras</h3>
        <p></p>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive center-block" src="{{ asset("/Imagenes/car2.jpg") }}" alt="Image">
      <div class="carousel-caption">
        <h3>FarCry</h3>
        <p></p>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive center-block" src="{{ asset("/Imagenes/car3.jpg") }}" alt="Image">
      <div class="carousel-caption">
        <h3>Nintendo</h3>
        <p></p>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive center-block" src="{{ asset("/Imagenes/car4.jpg") }}" alt="Image">
      <div class="carousel-caption">
        <h3>Surgeon Simulator</h3>
        <p></p>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive center-block" src="{{ asset("/Imagenes/car5.jpg") }}" alt="Image">
      <div class="carousel-caption">
        <h3>Social Media</h3>
        <p></p>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive center-block" src="{{ asset("/Imagenes/car6.jpg") }}" alt="Image">
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
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

<script src="{{ asset("/adminlte/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<script src="{{ asset("/adminlte/bootstrap/js/bootstrap.min.js") }}"></script>

</body>
</html>