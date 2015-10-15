<!-- Vista crear roles (formato modelo)
     Creada por FVieira para interfaces de Usuario ET1 -->
<?php include("views/header.php");
	RenderBanner("Gestion de Roles");
?>

<?php include("views/lateral.php");
	RenderLateral(1);
?>

<div id="contenido">
	<form action="php/process_crearRol.php" method="post">

		<h1>Crear Rol</h1>
		Nombre: <input type="text" name="nombre"><br/>
		Descripcion: <textarea name="desc"></textarea><br/>

		<div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
			<table>
				<tr><th>Usuarios</th><th>Permitir</th></tr>
				<tr><td>Usuario1</td><td><input type="checkbox" name="Usuario1"/></td></tr>
				<tr><td>Usuario2</td><td><input type="checkbox" name="Usuario2"/></td></tr>
				<tr><td>Usuario3</td><td><input type="checkbox" name="Usuario3"/></td></tr>
				<tr><td>usuario4</td><td><input type="checkbox" name="usuario4"/></td></tr>
			</table>
		</div>

		<div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
			<table>
				<tr><th>funcionalidades/th><th>Permitir</th></tr>
				<tr><td>Funcionalidad1</td><td><input type="checkbox" name="Funcionalidad1"/></td></tr>
				<tr><td>Funcionalidad2</td><td><input type="checkbox" name="Funcionalidad2"/></td></tr>
				<tr><td>Funcionalidad3</td><td><input type="checkbox" name="Funcionalidad3"/></td></tr>
				<tr><td>Funcionalidad4</td><td><input type="checkbox" name="Funcionalidad4"/></td></tr>
			</table>
		</div>

	  <input type="submit" onclick="history.go(-1)" value="Atras">
		<input type="submit" value="continuar" class="continuar"/>

	</form>
</div>

<?php include("views/footer.php");
	renderFooter("Admin"); //aqui va a ir el nombre de usuario de la sesion php
?>
