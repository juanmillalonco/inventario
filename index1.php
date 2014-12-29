<!DOCTYPE html>
<html>
<head>
	<title>Inventario </title>
</head>
<body>
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
			<input list="estado" name="estado" placeholder="Seleccione el estado" required>
    		     <datalist id="estado">
    		        <option value="B">
    		        <option value="R">
    		        <option value="M">	
    		     </datalist>
			<br />
			<p>Nro de Serie</p>
			<input type="text" name="serie" placeholder="ingrese el numero de serie" required/>
			<p>Observacion</p>
			<textarea name="observacion" placeholder="¿Alguna observacion?">
				
			</textarea>
		</fieldset>
		<input type="submit" value="agregar" />
	</form>
</body>
</html>