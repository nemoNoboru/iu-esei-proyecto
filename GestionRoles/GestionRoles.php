<?php include ("../views/header.php");
	RenderBanner("Gestión de Roles");
	//include("../views/getIdioma.php");
	$Idioma = getIdioma();
?>
<div class="container">
	<div class="row">

<?php include ("../views/lateral.php");
        RenderLateral (1);
?>

	<div class="col-md-9 col-sm-12">
		<h1><?php echo $Idioma['Gestión de Roles']; ?></h1>
	<?php
		$table_maker = new RenderTableGestion;
		$table_maker->tableRol();
	?>

	<button class='btn btn-default' onclick="location.href='CrearRol.php'"><?php echo $Idioma['Crear']; ?></button>
	<button class='btn btn-default' onclick="location.href='ModificarRol.php'"><?php echo $Idioma['Modificar']; ?></button>
</div>
</div>
<?php include("../views/popupGestion.php"); ?>
<div class="footer logo1"></div>
<?php include ("../views/footer.php");
        RenderFooter();
?>
