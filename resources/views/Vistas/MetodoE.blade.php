<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="bootstrap.css" rel="stylesheet">
	<title>Envio</title>
</head>
	<center>
	<body><!--Titulo envio-->
		<div>
			</br></br>
  				<div class = "panel-heading">
					<center>
						<h2><b>Formas de Envio</b></h2>
					</center>
				</div>
		</div>
		<div class="container">
			<div class="row-fluid">
						 <!--ColumnaRenglon 1 imagen, paqueterias, mapa-->
				<div class="row">
	  				<div class="col-md-12">
	  										<!--imagen-->
	  					<div class="col-md-4">
	  						</br></br>
	  						<img src="paqueteria.png" class="img-responsive" alt="no encontrada">
	  					</div>
	  										<!--paqueterias-->
	  					<div class="col-md-4" style=" background-color: #D8D8D8">
	  						<form class="form-horizontal">
	  							</br>
	  							<div class="form-group">
	  								<label class="control-label col-xs-5"><b>Metodo de pago</b></label>
	  									<div class="col-xs-5">
	  										<button type="button" class="form-control btn btn-success" name="my-checkbox" checked>Listo</button>
	  									</div>
	  									<div class="col-xs-2 cssToolTip">
	  										<a data-toggle="tooltip" title="Método ya seleccionado" class="glyphicon glyphicon-info-sign"></a>
	  									</div>
	  							</div>
	  							<div class="form-group">
	  								<label for="codigopostal" class="control-label col-xs-5">Codigo Postal: </label>
	  									<div class="col-xs-5">
	  										<input type="text" class="form-control" id="codigopostal" name="codigopostal" placeholder="Codigo postal">
	  									</div>
	  									<div class="col-xs-2 cssToolTip">
	  										<a data-toggle="tooltip" title="Introduzca solo números" class="glyphicon glyphicon-info-sign"></a>
	  									</div>
	  							</div>
	  							<div class="form-group">
	  								<label for="estafeta" class="control-label col-xs-5"><input class="control-input col-xs-4" type="radio"/>estafeta: </label>
	  									<div class="col-xs-5">
	  										<input type="text" class="form-control" id="estafeta" name="estafeta" placeholder="Precio"/>
	  									</div>
	  									<div class="col-xs-2 cssToolTip">
	  										<a data-toggle="tooltip" title="Precio ya establecido por estafeta" class="glyphicon glyphicon-info-sign"></a>
	  									</div>
	  							</div>
	  							<div class="form-group">
	  								<label for="ups" class="control-label col-xs-5"><input class="control-input col-xs-4" type="radio"/>ups:</label>
	  									<div class="col-xs-5">
	  										<input type="text" class="form-control" id="ups" name="ups" placeholder="Precio"/>
	  									</div>
	  									<div class="col-xs-2 cssToolTip">
	  										<a data-toggle="tooltip" title="Precio ya establecido por ups" class="glyphicon glyphicon-info-sign"></a>
	  									</div>
	  							</div>
	  							<div class="form-group">
	  								<label for="DHL" class="control-label col-xs-5"><input type="radio" class="control-input col-xs-4"/>DHL:</label>
	  									<div class="col-xs-5">
	  										<input type="text" name="DHL" id="DHL" class="form-control" placeholder="Precio" />
	  									</div>
	  									<div class="col-xs-2 cssToolTip">
	  										<a data-toggle="tooltip" title="Precio ya establecido por DHL" class="glyphicon glyphicon-info-sign"></a>
	  									</div>
	  							</div>
	  							<div class="form-group">
	  								<label for="FedEx" class="control-label col-xs-5"><input type="radio" class="control-input col-xs-4"/>FedEx:</label>
	  									<div class="col-xs-5">
	  										<input type="text" name="FedEx" id="FedEx" class="form-control" placeholder="Precio"/>
	  									</div>
	  									<div class="col-xs-2 cssToolTip">
	  										<a data-toggle="tooltip" title="Precio ya establecido por FedEx" class="glyphicon glyphicon-info-sign"></a>
	  									</div>
	  							</div>
	  						</form>
	  					</div>
	  									<!--mapa-->
	  					<div class="col-md-2">
	  						<center>
	  							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d57955.51758217761!2d-107.39899156248782!3d24.78792434496064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1458964796262" width="380" height="318" frameborder="0" style="border:0" allowfullscreen></iframe>
	  						</center>
	  					</div>
	  				</div>
	  								 <!--Columna 2 datos, precio, boton pagar-->
	  				<div class="row">
	  					<div class="col-md-12">
	  						</br>
	  											<!--datos-->
	  						<div class="col-md-8" style=" background-color: #D8D8D8">
	  							<form class="form-horizontal">
	  								</br>
	  								<div class="form-group">
	  									<label for="Nombre" class="control-label col-xs-3"><b>Nombre:</b></label>
	  										<div class="col-xs-8">
	  											<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Paterno + Materno + Nombre" />
	  										</div>
	  										<div class="col-xs-1 cssToolTip">
	  										<a data-toggle="tooltip" title="Solo se requiere un nombre" class="glyphicon glyphicon-info-sign"></a>
	  									</div>
	  								</div>
	  								<div class="form-group">
	  									<label for="Domicilio" class="control-label col-xs-3"><b>Domicilio:</b></label>
	  										<div class="col-xs-8">
	  											<input type="text" class="form-control" id="Domicilio" name="Domicilio" placeholder="Ingrese domicilio" />
	  										</div>
	  										<div class="col-xs-1 cssToolTip">
	  										<a data-toggle="tooltip" title="Orden establecido: Numero, Calle, Colonia " class="glyphicon glyphicon-info-sign"></a>
	  									</div>
	  								</div>
	  								<div class="form-group">
	  									<label for="NumTel" class="control-label col-xs-3"><b>Telefono:</b></label>
	  										<div class="col-xs-8">
	  											<input type="text" class="form-control" id="NumTel" name="cp" placeholder="Ingrese numero de telefono" />
	  										</div>
	  										<div class="col-xs-1 cssToolTip">
	  										<a data-toggle="tooltip" title="Coloque la lada de su localidad ejemplo: (667)- " class="glyphicon glyphicon-info-sign"></a>
	  									</div>
	  								</div>
	  								<div class="form-group">
	  									<label for="cp" class="control-label col-xs-3"><b>Codigo Postal:</b></label>
	  										<div class="col-xs-8">
	  											<input type="text" class="form-control" id="cp" name="cp" placeholder="Ingrese codigo postal" />
	  										</div>
	  										<div class="col-xs-1 cssToolTip">
	  										<a data-toggle="tooltip" title="Ingrese el Código Postal con números " class="glyphicon glyphicon-info-sign"></a>
	  									</div>
	  								</div>
	  								<div class="form-group">
	  									<label for="resp" class="control-label col-xs-3"><b>Responsable:</b></label>
	  										<div class="col-xs-8">
	  											<input type="text" class="form-control" id="resp" name="resp" placeholder="Paterno + Materno + Nombre" />
	  										</div>
	  										<div class="col-xs-1 cssToolTip">
	  										<a data-toggle="tooltip" title="Persona que también pueda recibir el paquete" class="glyphicon glyphicon-info-sign"></a>
	  									</div>
	  								</div>
	  							</form>
	  						</div>
	  												<!--precio -->
	  						<div class="col-md-4">
	  							<form class="form-horizontal">
	  								</br>
	  								<div class="form-group">
	  									<label for="Precio" class="col-xs-5">Precio:</label>
	  										<div class="col-xs-7">
												<div class="input-group">
													<span class="input-group-addon">$</span>
													<input type="text" class="form-control" placeholder="$">
													<span class="input-group-addon">.00</span>
												 </div>
											</div>
	  										</br></br>
	  											<div class="col-xs-9">
	  												<span class="glyphicon glyphicon-plus"></span>	
	  											</div>
	  										</br></br>
	  									<label for="Envio" class="col-xs-5">Envio:</label>
	  										<div class="col-xs-7">
												<div class="input-group">
													<span class="input-group-addon">$</span>
													<input type="text" class="form-control" placeholder="$">
													<span class="input-group-addon">.00</span>
												</div>
											</div>
											</br></br>
	  											<div class="col-xs-9">
	  												<span class="glyphicon glyphicon-plus"></span>	
	  											</div>
	  										</br></br>
	  									<label for="Total" class="col-xs-5">Total:</label>
	  										<div class="col-xs-7">
												<div class="input-group">
													<span class="input-group-addon">$</span>
													<input type="text" class="form-control" placeholder="$">
													<span class="input-group-addon">.00</span>
												</div>
											</div>
	  								</div>
	  								<div class="col-xs-12">
										  <button type="button" class="btn btn-success ">Pagar</button>
									</div>
	  							</form>
	  						</div>
	  					</div>
	  				</div>
	  			</div>
			</div>
		</div>
	</center>
	<script>
		$(document).ready(function(){
   		 	$('[data-toggle="tooltip"]').tooltip();   
			});
	</script>

	</body>
</html>

