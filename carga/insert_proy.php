<?php
	$con = mysqli_connect("mysql.boasso24horas.com","proyectosb24h","KLRdecline","proyectosb24h");

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql = "INSERT INTO expedientes (dictamen, fecha, detalle, comision, tipo , numero, link, comentario)
			VALUES
			('$_POST[dictamen]','$_POST[fecha]','$_POST[detalle]','$_POST[comision]','$_POST[tipo]','$_POST[numero]','$_POST[link]','$_POST[comentario]')";

	if (!mysqli_query($con,$sql)) {
	  die('Error: ' . mysqli_error($con));
	}

	mysqli_close($con);

	//cargar de archivo
	$info = pathinfo($_FILES['file']['name']);
	$ext = $info['extension']; // get the extension of the file
	$newname = $_REQUEST['numero'].$ext; 

	//aca tiene que ir el path absoluto del servidor
	$path = "/Applications/XAMPP/xamppfiles/htdocs/CargaProyectos/carga/";
	$target = $paty . $newname;
	move_uploaded_file( $_FILES['file']['tmp_name'], $target);
	header('location: index.php?msg=Los datos fueron guardados correctamente');
?>

