<?php
if(!($con=mysql_connect("localhost","root","")))
	die("Error: No se puede conectar");

// Seleccion de la base de datos

if (!mysql_select_db("inventario",$con))
{
	die ("no se encontro base de datos");
}

$nombre = $_POST['nombre'];
$unidad = $_POST['unidad'];
$grado = $_POST['grado'];



$consulta = mysql_query("INSERT INTO FUNCIONARIOS VALUES (NULL,'$nombre','$unidad','$grado')");
$consulta1 = mysql_query("SELECT NOMBRE FROM FUNCIONARIOS WHERE NOMBRE='$nombre'");


$row=mysql_fetch_array($consulta1);

echo $row['nombre'];

?>

