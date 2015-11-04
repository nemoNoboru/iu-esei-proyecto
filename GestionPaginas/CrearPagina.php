<!-- Vista crear pagina (formato modelo)
     Creada por FVieira para interfaces de Usuario ET1 -->
<?php include("../views/header.php");
	RenderBanner("Gestion de Páginas");
	$Idioma = getIdioma();
?>

<div class="container">
	<div class="row">
		<?php include("../views/lateral.php");
			RenderLateral(2);
		?>
		<div class="col-md-9 col-sm-12">
			<form action="../php/GestionPaginas/process_crearPagina.php" method="post" id="formulario">

				<h1><?php echo $Idioma['Crear página']; ?></h1>
				<div class="form-group">
				<?php echo $Idioma['Nombre'];?>: <input type="text" class="form-control" name="nombre"><br/>
				<?php echo $Idioma['Descripcion']; ?>: <input class="form-control" type="text" name="desc"><br/>

				<?php
				$table_maker = new RenderTable;
				$table_maker->tableBlankFuncionalidad();
				?>

				<?php
				$table_maker->tableBlankUsuario();
				?>

			  <button class="btn btn-default" onclick="history.go(-1)"><?php echo $Idioma['Atras']; ?></button>
			  <input type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"  value="<?php echo $Idioma['Guardar']; ?>" class="continuar"/>
			</div>
			</form>
		</div>
	</div>

<?php include("../views/popup.php");?>

<?php include("../views/footer.php");
	renderFooter(); //aqui va a ir el nombre de usuario de la sesion php
?>
