<?php include("../views/header.php");
	RenderBanner("Gestión de Funcionalidades");
?>

<?php include("../views/lateral.php");
	RenderLateral(3); //gestion paginas esta el 2 en el array de lateral
?>

<div id="contenido">
		<?php
			$table_maker = new RenderTableGestion;
			$table_maker->tableFuncionalidad();
		?>
		<button onclick="location.href='CrearFuncionalidad.php'">Crear</button>
		<button onclick="location.href='ModificarFuncionalidad.php'">Modificar</button>

</div>

<?php include("../views/footer.php");
	renderFooter();
?>
