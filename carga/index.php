
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="es">
<head>
	<title>Carga de proyectos</title>
	<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Pragma" content="no-cache" />
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			  	<h1>Carga de Proyecto</h1>
			  	<?php if($_GET["msg"] != "") {	?>	
			  		<div class="alert alert-success"><?php printf($_GET["msg"]) ?></div>
			  	<?php } ?>
				<form role="form" action="insert_proy.php" method="post" enctype='multipart/form-data'>
					<div class="form-group">
						<label for="dictamen">Dictamen:</label>
						<input id="dictamen" class="form-control" type="text" name="dictamen">
					</div>
					
					<div class="form-group">
						<label for="fecha">Fecha:</label>
						<input id="fecha" class="form-control" type="date" name="fecha">
					</div>
					
					<div class="form-group">
						<label for="detalle">Detalle:</label>
						<input id="detale" class="form-control" type="text" name="detalle">
					</div>
					
					<div class="form-group">
						<label for="comision">Comision:</label>
						<select class="form-control" id="comision"  name="comision">
							<option value="Derechos Humanos">Derechos Humanos</option>
							<option value="Ecologia">Ecologia</option>
							<option value="Gobierno">Gobierno</option>
							<option value="Obras Publicas">Obras Publicas</option>
							<option value="Planeamiento">Planeamiento</option>
							<option value="Presupuesto">Presupuesto</option>
							<option value="Produccion">Produccion</option>
							<option value="Salud">Salud</option>
							<option value="Seguridad">Seguridad</option>
							<option value="Servicios Publicos">Servicios Publicos</option>
						</select>
					</div>
					
					<div class="form-group">
					    <label for="tipo">Tipo:</label>
					    <select class="form-control" id="tipo" name="tipo">
					    	<option value="Ordenanza">Ordenanza</option>
					    	<option value="Decreto">Decreto</option>
					    	<option value="Minuta">Minuta</option>
					    </select>
					</div>
					
					<div class="form-group">
				    	<label for="numero">Numero:</label>
				    	<input class="form-control" type="text" id="numero" name="numero">
				    </div>
					
					<div class="form-group">
				   		<label for="link">Link:</label>
				   		<input id="link" class="form-control" type="text" name="link">
				   	</div>
					
					<div class="form-group">
				   		<input class="form-control" type="file" name="file"></p></br>
				   	</div>
					
					<div class="form-group">
				   		<label for="comentario">Comentario:</label>
				   		<input class="form-control" id="comentario" type="text" name="comentario">
					</div>
					
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-lg active" value="Guardar"></input>				
					</div>
				</form>
			 </div>
		</div>
	</div>
</body>
</html>
	 
	 