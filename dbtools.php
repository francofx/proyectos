<?php
$dbhost = 'mysql.boasso24horas.com';
$dbuser = 'proyectosb24h';
$dbpass = 'KLRdecline';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error al conectar con la base de datos mysql');

$dbname = 'proyectosb24h';
mysql_select_db($dbname);
?>