<!DOCTYPE html>
<html>
<head>
	<title>Inventario </title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<header>
	<figure id="logo">
    	<img src="img/logo.png" />
    </figure>
    	<h1>Inventario Aduana Puerto Aysen</h1>
    	<nav></nav>
</header>
	<form>
		<fieldset>
			<p>Unidad</p>
			<input list="unidad" name="unidad" placeholder="Seleccione una categoria" required>
    		     <datalist id="unidad">
    		        <option value="OIRS">
    		        <option value="Fiscalizacion">
    		        <option value="Zona Primaria">	
    		     </datalist>
			<br />
			<p>Nro de Placa</p>
			<input type="text" name="placa" placeholder="Ingrese el numero de la placa" required />
			<br/>
			<p>Descripcion</p>
			<input type="text" name="descripcion" placeholder="Ingrese la descripcion" required />
			<br/>
			<p>Estado</p>
			<input list="estado" name="estado" placeholder="Seleccione el estado" required />
    		     <datalist id="estado">
    		        <option value="B">
    		        <option value="R">
    		        <option value="M">	
    		     </datalist>
			<br />
			<p>Usuario Asignado</p>
			<input list="asignado" name="asignado" placeholder="Seleccione el usuario" required />
    		     <datalist id="asignado">
    		        <option value="Rodrigo Vera">
    		        <option value="Sergio Leal">
    		        <option value="Ivan Cardenas">	
    		     </datalist>
			<br />
			<p>Nro de Serie</p>
			<input type="text" name="serie" placeholder="ingrese el numero de serie" />
			<p>Observacion</p>
			<textarea name="observacion" placeholder="¿Alguna observacion?">
				
			</textarea>
			<br/>
			<input type="submit" value="agregar" />
		</fieldset>
		
	</form>
	 <footer>
    	<strong>Administracion Aduana Puerto Aysen</strong>
    </footer>
</body>
</html>