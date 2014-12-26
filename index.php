<!DOCTYPE html> <!--Comienza nuestro codigo html -->
<html>
 <head>
 </head>
    <body>
    <header> <!--Cabezera de la pagina -->
    	<h1>Sistema de inventario</h1>
    </header>
    <!--Comienza nuestro formulario principal -->
    	<form action="procesa1.php" method="post">
    	<fieldset>
    		<p>Elemento</p> 
    		<input type="text" name="elemento" placeholder="Ingrese un elemento" />
    		<br />
    		<p>Cantidad</p> 
    		<input type="number" name="cantidad" placeholder="Ingrese la cantidad" />
    		<br />
    		<p>Categoria</p> 
    		<input list="categoria" name="categoria" placeholder="Seleccione una categoria">
    		     <datalist id="categoria">
    		        <option value="Materiales y Herramientas">
    		        <option value="Vestuario">
    		        <option value="Insumos y materiales de oficina">	
    		     </datalist>
    		<br />
    		<p>Observacion</p> <textarea name="observacion" placeholder="¿alguna observacion que agregar?">
    	    </textarea>
    	</fieldset>
    		<br/>

    		<input type="submit" value="Agregar" />
    	</form>
    </body>
</html>