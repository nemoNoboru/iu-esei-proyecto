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
			<?php
			$table_maker = new RenderTable;
			$table_maker->tableBlankUsuario();
			?>

			<?php
			$table_maker->tableBlankFuncionalidad();
			?>

	  <button onclick="history.go(-1)">Atrás</button>
		<input type="submit" value="Guardar" class="Guardar"/>

	</form>
</div>

<?php include("../views/footer.php");
	renderFooter(); //aqui va a ir el nombre de usuario de la sesion php
?>
