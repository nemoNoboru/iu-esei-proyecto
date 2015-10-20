<?php include("../views/header.php");
	RenderBanner("Gestión de Roles");
?>

<?php include("../views/lateral.php");
	RenderLateral(1);
?>
   <div id="contenido">
	<form action="../php/GestionRoles/process_crearRol.php" method="post">
		<h1>Crear Rol</h1>
	    Nombre: <input type="text" name="nombre"><br><br>
			Descripcion: <textarea name="desc"></textarea><br/>
		<div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
			<table>
				<tr><th>Usuarios</th></tr>
				<tr><td>Usuario1</td><td><input type="checkbox" name="Usuario1"/></td></tr>
				<tr><td>Usuario2</td><td><input type="checkbox" name="Usuario2" checked="yes"/></td></tr>
				<tr><td>Usuario3</td><td><input type="checkbox" name="Usuario3"/></td></tr>
				<tr><td>usuario4</td><td><input type="checkbox" name="usuario4" checked="yes"/></td></tr>
			</table>
		</div>

		<div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
			<table>
        <tr><th>Funcionalidades</th></tr>
				<tr><td>Función 1</td><td><input type="checkbox" name="Funcionalidad1"/></td></tr>
				<tr><td>Función 2</td><td><input type="checkbox" name="Funcionalidad2" checked="yes"/></td></tr>
				<tr><td>Función 3</td><td><input type="checkbox" name="Funcionalidad3"/></td></tr>
				<tr><td>Función 4</td><td><input type="checkbox" name="Funcionalidad4" checked="yes"/></td></tr>
			</table>
		</div>

	  <input type="submit" onclick="history.go(-1)" value="Atras">
	  <form action="crearRol.php">
		<input type="submit" value="Guardar" class="Guardar"/>

	</form>
</div>

<?php include("../views/footer.php");
	renderFooter("Admin"); //aqui va a ir el nombre de usuario de la sesion php
?>
