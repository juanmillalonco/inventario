<?php

// Conexion a la base de datos
if(!($con=mysql_connect("localhost","root","")))
	die("Error: No se puede conectar");

// Seleccion de la base de datos

if (!mysql_select_db("inventario",$con))
{
	die ("no se encontro base de datos");
}

$elemento = $_POST['elemento'];
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];
$observacion = $_POST['observacion'];



$query1= "INSERT INTO elementos VALUES (NULL,'$elemento','$cantidad','$categoria','$observacion')";
$query2= "SELECT elemento FROM elementos";


$resultado = mysql_query($query1,$con);
$resultado2 = mysql_query($query2,$con);

echo mysql_fetch_row($resultado2);


?>

<!--
if(mysql_fetch_row($resultado2)>=1)
{
	echo "el elemento ya existe";
}
elseif(!$resultado)
{
    echo "elemento ingresado";
}


?>
