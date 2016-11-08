<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 	 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 	 <style>
  		.carousel-inner > .item > img,
  		.carousel-inner > .item > a > img {
      width: 20%;
      margin: auto;
  }
  </style>
	<title>Carrito</title>
</head>
<body>
<center>
	<div class="container">
		<div class="row-fluid">
			<div class="panel-heading">
				</br></br>
				<h2 align="left"><b>Mi carrito</b></h2>
				<hr size="2px" style="color: black" align="left" width="100%" noshade="noshade">
			</div>
		</div>
	</div>
<!--Div primer producto con total y boton pagar-->
	<div class="container"> 
		<div class="row-fluid">
			<div class="row">
	  			<div class="col-md-20">
	  				<div class="col-md-3">
		  				<div class="col-xs-10">
		  					<div class="form-group">
		  						<label for="nProduct">Nombre producto</label>
		  						<img src="lap.jpg" class="img-responsive" alt="no encontrada">
		  					</div>
		  				</div>
	  				</div>
	  				<div class="col-md-3">
	  					<div class="col-xs-1">
		  					<div class="form-group">
	  							<label for="comment">Descripcion:</label>
	  							<textarea name="textarea" rows="6" cols="25" id="comment"></textarea>
	  							<a href="#" class="btn btn-info btn-lg">
	        						<span class="glyphicon glyphicon-trash"></span> Trash 
	      						</a>
							</div>
	  					</div>	
	  				</div>
	  				<div class="col-md-2">
	 	  				<div class="col-xs-14">
							<div class="form-group">
								<label for="precio">Precio</label>
								<div class="input-group">
									<span class="input-group-addon">$</span>
									<input type="text" class="form-control" name="precio" id="precio">
										<span class="input-group-addon">.00</span>
								</div>	
							</div>
						</div>
	  				</div>
	  				<div class="col-md-1">
	 	  				<div class="col-xs-14">
							<div class="form-group">
								<label for="cantidad">Cantidad</label>
								<div class="input-group">
									<input type="text" class="form-control" name="cantidad" id="cantidad" size="10">		
								</div>	
							</div>
						</div>
	  				</div>
	  				<div class="col-md-3">
						<div class="col-xs-10">
							<div class="form-group">
									<label for="total">Total a pagar</label>
								<div class="input-group">
									<span class="input-group-addon">$</span>
									<input type="text" class="form-control" name="total" id="total">
									<span class="input-group-addon">.00</span>
								</div>
								<div class="form-group">
									</br>
									<button type="button" class="btn btn-success">Finalizar compra </button>
								</div>							
							</div>
						</div>
					</div>
	  				<!--
	  				<div class="col-md-0">
	  					<div class="col-xs-1">
	  					</br></br>
	  						<span class="glyphicon glyphicon-triangle-right"></span>	
	  					</div>
	  				</div>
	  				<div class="col-md-2">
	 	  				<div class="col-xs-14">
							<div class="form-group">
	
								<label for="total">Total</label>
								<div class="input-group">
									<span class="input-group-addon">$</span>
									<input type="text" class="form-control" name="total" id="total">
										<span class="input-group-addon">.00</span>
								</div>	
							</div>
						</div>
					</div>
					-->
	  			</div>
			</div>
		</div>
	</div>
	<!--Div segundo producto-->
	<div class="container">
		<div class="row-fluid">
			<div class="row">
	  			<div class="col-md-20">
	  				<div class="col-md-3">
		  				<div class="col-xs-10">
		  					<div class="form-group">
		  						<label for="nProduct">Nombre producto</label>
		  						<img src="mac.jpg" class="img-responsive" alt="no encontrada">
		  					</div>
		  				</div>
	  				</div>
	  				<div class="col-md-3">
	  					<div class="col-xs-1">
		  					<div class="form-group">
		  					
	  							<label for="comment">Descripcion:</label>
	  							<textarea name="textarea" rows="6" cols="25" id="comment"></textarea>
	  							<a href="#" class="btn btn-info btn-lg">
	        						<span class="glyphicon glyphicon-trash"></span> Trash 
	      						</a>
							</div>
	  					</div>	
	  				</div>
	  				<!--REVISAR PARA VER EL input-GROUP-->
	  				<div class="col-md-2">
	 	  				<div class="col-xs-14">
							<div class="form-group">
								<label for="precio">Precio</label>
								<div class="input-group">
									<span class="input-group-addon">$</span>
									<input type="text" class="form-control" name="precio" id="precio">
										<span class="input-group-addon">.00</span>
								</div>	
							</div>
						</div>
	  				</div>
	  				<div class="col-md-1">
	 	  				<div class="col-xs-14">
							<div class="form-group">
						
								<label for="cantidad">Cantidad</label>
								<div class="input-group">
									<input type="text" class="form-control" name="cantidad" id="cantidad" size="10">		
								</div>	
							</div>
						</div>
	  				</div>
	  				<!--
	  				<div class="col-md-0">
	  					<div class="col-xs-1">
	  					</br></br>
	  						<span class="glyphicon glyphicon-triangle-right"></span>	
	  					</div>
	  				</div>
	  				<div class="col-md-2">
	 	  				<div class="col-xs-14">
							<div class="form-group">
	
								<label for="total">Total</label>
								<div class="input-group">
									<span class="input-group-addon">$</span>
									<input type="text" class="form-control" name="total" id="total">
										<span class="input-group-addon">.00</span>
								</div>	
							</div>
						</div>
					</div>
					-->
	  			</div>
	  				<hr size="2px" width="100%" style="color: black" align="left" noshade="noshade">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row-fluid">
			<div class="row">
				<div class="col-md-3">
					<div class="col-xs-10">					
					</div>					
				</div>
				<h4 align="left"><b>También te puede interesar:</b></h4>
			</div>
		</div>
	</div>
	<!-- sabados de Carrucel-->
	<div class="container">
		<div class="row-fluid">
			<div class="row">
				<div class="col-md-20">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="1"></li>
					    <li data-target="#myCarousel" data-slide-to="2"></li>
					    <li data-target="#myCarousel" data-slide-to="3"></li>
					  </ol>
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					      <img src="escritorio.jpg" alt="Chania">
					      <div class="carousel-caption">
					        <h3>HP-Escritorio</h3>
					        <p>Chila</p>
					      </div>
					    </div>
					    <div class="item">
					      <img src="lap.jpg" alt="Chania">
					      <div class="carousel-caption">
					        <h3>Lenovo-Laptop</h3>
					        <p>Chingona</p>
					      </div>
					    </div>
					    <div class="item">
					      <img src="mac.jpg" alt="Flower">
					      <div class="carousel-caption">
					        <h3>Mac</h3>
					        <p>Na, no me gustan</p>
					      </div>
					    </div>
					    <div class="item">
					      <img src="all.jpg" alt="Flower">
					      <div class="carousel-caption">
					        <h3>All in One</h3>
					        <p>Maximo 4 años duran</p>
					      </div>
					    </div>
					  </div>
					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</center>	
</body>
</html>