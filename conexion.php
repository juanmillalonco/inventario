<?php
function conectarse()
{
	$servidor="localhost";
	$usuario="root";
	$password="";
	$bd="inventario";

	$conectar = new mysqli($servidor,$usuario,$password,$bd) or die("no se puede conectar");
}

$conexion = conectarse();

?>