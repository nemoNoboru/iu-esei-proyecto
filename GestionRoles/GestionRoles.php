<?php include ("../views/header.php");
	RenderBanner("Gestión de Roles");
?>

<?php include ("../views/lateral.php");
        RenderLateral (1);
?>

<div id="contenido">

	<?php
		$table_maker = new RenderTableGestion;
		$table_maker->tableRol();
	?>

	<button onclick="location.href='CrearRol.php'">Crear</button>
	<button onclick="location.href='ModificarRol.php'">Modificar</button>
</div>
<?php include ("../views/footer.php");
        RenderFooter();
?>
