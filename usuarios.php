<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
	<figure id="logo">
    	<img src="img/logo.png" />
    </figure>
		<h1>Ingreso de funcionario</h1>
	</header>
	<form action="agregar_funcionario.php" method="post">
	<fieldset>
		<p>Nombre</p>
		<input type="text" name="nombre" required />
		<br />
		<p>Unidad</p>
			<input list="unidad" name="unidad" placeholder="Seleccione una unidad" required />
    		     <datalist id="unidad">
    		        <option value="OIRS">
    		        <option value="Fiscalizacion">
    		        <option value="Zona Primaria">	
    		     </datalist>
			<br />
        <p>Grado</p>
        <input list="grado" name="grado" placeholder="Seleccione una grado" required />
    		     <datalist id="grado">
    		        <option value="21">
    		        <option value="20">
    		        <option value="19">	
    		        <option value="18">
    		        <option value="17">
    		        <option value="16">
    		        <option value="15">
    		        <option value="14">
    		        <option value="13">
    		        <option value="12">
    		     </datalist>
			<br />
		<input type="submit" value="Agregar Funcionario" />	
			</fieldset>
	</form>
</body>
</html>