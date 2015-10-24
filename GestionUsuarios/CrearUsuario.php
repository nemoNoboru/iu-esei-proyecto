<?php include("../views/header.php");
	RenderBanner("Gestión de Usuarios");
?>

<?php include("../views/lateral.php");
	RenderLateral(0);
?>

<div id="contenido">
	<form action="../php/GestionUsuarios/process_crearUsuario.php" method="post">

		<h1>Crear Usuario</h1>
		Nombre: <input type="text" name="nombre"><br/>
		Descripción/Detalles: <input type="text" name="desc"><br/>
		email: <input type="text" name="email"><br/>
		Contraseña: <input type="password" name="pass1"><br/>
    Repetir Contraseña: <input type="password" name="pass2"><br/>

		<?php
		$table_maker = new RenderTable;
		$table_maker->tableBlankRol();
		?>

		<?php
		$table_maker->tableBlankPagina();
		?>


		<?php
		$table_maker->tableBlankFuncionalidad();
		?>

	  <button onclick="history.go(-1)">Atrás</button>
		<input type="submit" value="Guardar" class="continuar"/>

	</form>
</div>

<?php include("../views/footer.php");
	renderFooter(); //aqui va a ir el nombre de usuario de la sesion php
?>
