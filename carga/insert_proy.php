<?php
$con=mysqli_connect("mysql.boasso24horas.com","proyectosb24h","KLRdecline","proyectosb24h");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO expedientes (dictamen, fecha, detalle, comision, tipo , numero, link, comentario)
VALUES
('$_POST[dictamen]','$_POST[fecha]','$_POST[detalle]','$_POST[comision]','$_POST[tipo]','$_POST[numero]','$_POST[link]','$_POST[comentario]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 campo agregado";


mysqli_close($con);

//cargar de archivo

$info = pathinfo($_FILES['file']['name']);
 $ext = $info['extension']; // get the extension of the file
 $newname = "pepito.".$ext; 

 $target = '/boasso24horas.com/proyectos/pdf/'.$newname;
 $chiche = move_uploaded_file( $_FILES['file']['tmp_name'], $target);
var_dump($chiche);


?>