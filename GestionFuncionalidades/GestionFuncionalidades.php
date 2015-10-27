<?php include("../views/header.php");
	RenderBanner("Gestión de Funcionalidades");
	$Idioma = getIdioma();
?>
<div class="container">
<div class="row">

<?php include("../views/lateral.php");
	RenderLateral(3); //gestion paginas esta el 2 en el array de lateral
?>

	<div class="col-md-9 col-sm-12">
		<?php
			$table_maker = new RenderTableGestion;
			$table_maker->tableFuncionalidad();
		?>
		<button onclick="location.href='CrearFuncionalidad.php'"><?php echo $Idioma['Crear']; ?></button>
		<button onclick="location.href='ModificarFuncionalidad.php'"><?php echo $Idioma['Modificar']; ?></button>
	</div>
</div>

<?php include("../views/footer.php");
	renderFooter();
?>
