<?php include("../views/header.php");
	RenderBanner("Gestión de Roles");
	$Idioma = getIdioma();
?>

<div class="container">
	<div class="row">
		<?php include("../views/lateral.php");
			RenderLateral(1);
		?>
		<div class="col-md-9 col-sm-12">
			<form action="../php/GestionRoles/process_crearRol.php" method="post">
				<h1><?php echo $Idioma['Crear rol']; ?></h1>
				<div class="form-group">
				<?php echo $Idioma['Nombre'];?>: <input type="text" class="form-control" name="nombre"><br/>
				<?php echo $Idioma['Descripcion']; ?>: <input class="form-control" type="text" name="desc"><br/>

					<?php
					$table_maker = new RenderTable;
					$table_maker->tableBlankUsuario();
					?>

					<?php
					$table_maker->tableBlankFuncionalidad();
					?>

			  <button class="btn btn-default" onclick="history.go(-1)">Atrás</button>
				<input class="btn btn-default" type="submit" value="Guardar" class="Guardar"/>
			</div>
			</form>
		</div>
	</div>
</div>

<?php include("../views/footer.php");
	renderFooter(); //aqui va a ir el nombre de usuario de la sesion php
?>
