<!DOCTYPE html> <!--Comienza nuestro codigo html -->
<html>
 <head>
      <link rel="stylesheet" type="text/css" href="css/estilos.css">
      <title>Pagina de inicio Inventario</title>
 </head>
    <body>
    <header> <!--Cabezera de la pagina -->
    <figure id="logo">
    	<img src="img/logo.png" />
    </figure>
    	<h1>Inventario de Insumos</h1>
    	<nav></nav>
    </header>

    <nav>
    	<a href="#">Agregar</a>
    	<a href="#">Consultar</a>
    	<a href="#">Generar Informe</a>
    	
    </nav>
    <!--Comienza nuestro formulario principal -->
    	<form action="procesa1.php" method="post">
    	<fieldset>
    		<p>Elemento</p> 
    		<input type="text" name="elemento" placeholder="Ingrese un elemento" required/>
    		<br />
    		<p>Cantidad</p> 
    		<input type="number" name="cantidad" placeholder="Ingrese la cantidad" required />
    		<br />
    		<p>Categoria</p> 
    		<input list="categoria" name="categoria" placeholder="Seleccione una categoria" required>
    		     <datalist id="categoria">
    		        <option value="Materiales y Herramientas">
    		        <option value="Vestuario">
    		        <option value="Insumos y materiales de oficina">	
    		     </datalist>
    		<br />
    		<p>Observacion</p> 
    		<textarea name="observacion" placeholder="alguna observacion que agregar">

    	    </textarea>
    	</fieldset>
    		<br/>

    		<input type="submit" value="Agregar" />
    	</form>

    <footer>
    	<strong>Administracion Aduana Puerto Aysen</strong>
    </footer>
    </body>
</html>