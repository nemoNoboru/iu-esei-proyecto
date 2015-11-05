<!-- Vista crear funcionalidad (formato modelo)
     Creada por FVieira para interfaces de Usuario ET1 -->
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
	<form action="../php/GestionFuncionalidades/process_crearFuncionalidad.php" method="post" id="formulario">
	<div class="form-group">

		<h1><?php echo $Idioma['Crear funcionalidad'];?></h1>
			<?php echo $Idioma['Nombre'];?>: <input type="text" class="form-control" name="nombre"><br/>
			<?php echo $Idioma['Descripcion'];?>: <br/> <textarea rows="5" cols="30" name="desc"></textarea><br/>

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

		<button class="btn btn-default" onclick="history.go(-1)"><?php echo $Idioma['Atras']; ?></button>
				<input type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"  value="<?php echo $Idioma['Guardar']; ?>" class="continuar"/>

			</div>
		</form>
	</div>
	</div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $Idioma['Validar']; ?></h4>
      </div>
      <div class="modal-body">
        <?php echo $Idioma['Seguro']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
        <button type="button" onclick="document.getElementById('formulario').submit();" class="btn btn-primary">OK</button>
      </div>
    </div>
	</div>
</div>
<div class="footer logo2"></div>

<?php include("../views/footer.php");
	renderFooter(); //aqui va a ir el nombre de usuario de la sesion php
?>
