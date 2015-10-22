<?php include("../views/header.php");
	RenderBanner("Gestión de Páginas");
?>

<?php include("../views/lateral.php");
	RenderLateral(2);
?>
<div id="contenido">

	<?php
		$table_maker = new RenderTableGestion;
		$table_maker->tablePagina();
	?>

		<button onclick="location.href='CrearPagina.php'">Crear</button>
		<button onclick="location.href='ModificarPagina.php'">Modificar</button>
</div>

<?php include("../views/footer.php");
	renderFooter("Admin");
?>
