<!-- Vista crear funcionalidad (formato modelo)
     Creada por FVieira para interfaces de Usuario ET1 -->
<?php include("views/header.php");
	RenderBanner("Gestion de funcionalidad");
?>

<?php include("views/lateral.php");
	RenderLateral(3); //gestion paginas esta el 2 en el array de lateral
?>

<div id="contenido">
	<form action="php/process_crearFuncionalidad.php" method="post">

		<h1>Crear funcionalidad</h1>
		Nombre: <input type="text" name="nombre"><br/>
		Descripcion: <textarea name="desc"></textarea><br/>

		<div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
			<table>
				<tr><th>Pagina</th><th>Permitir</th></tr>
				<tr><td>Pagina1</td><td><input type="checkbox" name="pagina1"/></td></tr>
				<tr><td>Pagina2</td><td><input type="checkbox" name="pagina2"/></td></tr>
				<tr><td>Pagina3</td><td><input type="checkbox" name="pagina3"/></td></tr>
				<tr><td>Pagina4</td><td><input type="checkbox" name="pagina4"/></td></tr>
			</table>
		</div>

		<div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
			<table>
				<tr><th>Roles</th><th>Permitir</th></tr>
				<tr><td>Roles1</td><td><input type="checkbox" name="Roles1"/></td></tr>
				<tr><td>Roles2</td><td><input type="checkbox" name="Roles2"/></td></tr>
				<tr><td>Roles3</td><td><input type="checkbox" name="Roles3"/></td></tr>
				<tr><td>Roles4</td><td><input type="checkbox" name="Roles4"/></td></tr>
			</table>
		</div>

		<div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
			<table>
				<tr><th>Usuario</th><th>Permitir</th></tr>
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

<?php include("views/footer.php");
	renderFooter("Admin"); //aqui va a ir el nombre de usuario de la sesion php
?>
