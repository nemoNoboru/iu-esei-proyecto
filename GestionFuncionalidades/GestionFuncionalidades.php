<?php include("../views/header.php");
	RenderBanner("Gestión de Funcionalidades"); //Muestra el header con la funcion definida en header.php
	$Idioma = getIdioma(); //Obtiene el idioma que se está usando para modificar los literales de la página
?>
<div class="container"> <!-- Este div llega hasta footer, representa toda la interfaz principal -->
<div class="row">

<?php include("../views/lateral.php");
	RenderLateral(3); //gestion paginas esta el 2 en el array de lateral
?>

	<div class="col-md-9 col-sm-12">
		<h1><?php echo $Idioma['Gestión de Funcionalidades']; makeTooltip($Idioma['tgf'],$Idioma['dgf']); ?></h1> <!-- Titulo dependiente de idioma -->
		<?php
			$table_maker = new RenderTableGestion;	// Creación del objeto tabla
			$table_maker->tableFuncionalidad();		// Se rellena la tabla con las funcionalidades existentes
		?>
		<hr/>
		<button class="btn btn-default btn-primary" onclick="location.href='CrearFuncionalidad.php'"><?php echo $Idioma['Crear']; ?></button>
		<!-- Botón que redirige a creación de funcionalidades nuevas -->
		<button class="btn btn-default" onclick="location.href='ModificarFuncionalidad.php'"><?php echo $Idioma['Modificar']; ?></button> 
		<!-- Botón que redirige a la modificación de funcionalidades nuevas -->
	</div>
</div>
<?php include("../views/popupGestion.php"); ?>
<div class="footer logo2"></div>
<?php include("../views/footer.php");
	renderFooter();
?>
