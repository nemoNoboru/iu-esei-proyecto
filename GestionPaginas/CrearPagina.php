<!-- Vista crear pagina (formato modelo)
     Creada por FVieira para interfaces de Usuario ET1 -->
<?php include("../views/header.php");
	RenderBanner("Gestion de Páginas");
?>

<?php include("../views/lateral.php");
	RenderLateral(2); //gestion paginas esta el 2 en el array de lateral
?>

<div id="contenido">
	<form action="../php/GestionPaginas/process_crearPagina.php" method="post">

		<h1>Crear pagina</h1>
		Nombre: <input type="text" name="nombre"><br/>
		Descripcion: <textarea name="desc"></textarea><br/>

		<div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
			<table>
				<tr><th>Funcionalidades</th></tr>
				<tr><td>Funcion1</td><td><input type="checkbox" name="funcion1"/></td></tr>
				<tr><td>Funcion2</td><td><input type="checkbox" name="funcion2"/></td></tr>
				<tr><td>Funcion3</td><td><input type="checkbox" name="funcion3"/></td></tr>
				<tr><td>Funcion4</td><td><input type="checkbox" name="funcion4"/></td></tr>
			</table>
		</div>

		<div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
			<table>
				<tr><th>Usuario</th></tr>
				<tr><td>Usuario1</td><td><input type="checkbox" name="Usuario1"/></td></tr>
				<tr><td>Usuario2</td><td><input type="checkbox" name="Usuario2"/></td></tr>
				<tr><td>Usuario3</td><td><input type="checkbox" name="Usuario3"/></td></tr>
				<tr><td>Usuario4</td><td><input type="checkbox" name="Usuario4"/></td></tr>
			</table>
		</div>

	  <input type="submit" onclick="history.go(-1)" value="Atras">
		<input type="submit" value="continuar" class="continuar"/>

	</form>
</div>

<?php include("../views/footer.php");
	renderFooter("Admin"); //aqui va a ir el nombre de usuario de la sesion php
?>
