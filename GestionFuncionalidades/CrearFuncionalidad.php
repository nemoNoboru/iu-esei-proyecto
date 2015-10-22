<!-- Vista crear funcionalidad (formato modelo)
     Creada por FVieira para interfaces de Usuario ET1 -->
<?php include("../views/header.php");
	RenderBanner("Gestion de Funcionalidades");
?>

<?php include("../views/lateral.php");
	RenderLateral(3); //gestion paginas esta el 2 en el array de lateral
?>

<div id="contenido">
	<form action="../php/GestionFuncionalidades/process_crearFuncionalidad.php" method="post">

		<h1>Crear funcionalidad</h1>
		Nombre: <input type="text" name="nombre"><br/>
		Descripcion: <textarea name="desc"></textarea><br/>

		<?php
		$table_maker = new RenderTable;
		$table_maker->tableBlankPagina();
		?>

		<?php
		$table_maker->tableBlankRol();
		?>

		<?php
		$table_maker->tableBlankUsuario();
		?>

	  <input onclick="history.go(-1)" value="Atras">
		<input type="submit" value="Guardar" class="continuar"/>

	</form>
</div>

<?php include("../views/footer.php");
	renderFooter("Admin"); //aqui va a ir el nombre de usuario de la sesion php
?>
