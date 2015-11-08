<!-- Vista crear funcionalidad (formato modelo)
     Creada por FVieira para interfaces de Usuario ET1 -->
<?php include("../views/header.php"); 	//Incluye el header
	RenderBanner("Gestión de Funcionalidades"); //Muestra el header con la funcion definida en header.php
	$Idioma = getIdioma(); //Obtiene el idioma que se está usando para modificar los literales de la página
?>

<div class="container"> <!-- Este div llega hasta footer, representa toda la interfaz principal -->
	<div class="row">
<?php include("../views/lateral.php");
	RenderLateral(3); //gestion paginas esta el 2 en el array de lateral
?>
	<div class="col-md-9 col-sm-12">
	<form action="../php/GestionFuncionalidades/process_crearFuncionalidad.php" method="post" id="formulario"> <
	<!-- manda los datos correspondientes del formulario a process_crearFuncionalidad.php, donde se crea en la base de datos con sus relaciones -->
	<div class="form-group">

		<h1><?php echo $Idioma['Crear funcionalidad']; makeTooltip($Idioma['tcf'],$Idioma['dcf']); ?></h1>
			<?php echo $Idioma['Nombre'];?>: <input type="text" class="form-control" name="nombre"><br/>
			<?php echo $Idioma['Descripcion'];?>: <br/> <textarea rows="5" cols="30" name="desc"></textarea><br/>

		<?php
		$table_maker = new RenderTable;		// crea un objeto RenderTable
		$table_maker->tableBlankPagina();	// usa la tablaCreada para llamar a una función con una lista de todas las páginas con sus checkboxes desmarcados
		?>

		<?php
		$table_maker->tableBlankRol();		// usa la tablaCreada para llamar a una función con una lista de todas los roles con sus checkboxes desmarcados
		?>

		<?php
		$table_maker->tableBlankUsuario();	// usa la tablaCreada para llamar a una función con una lista de todas los usuarios con sus checkboxes desmarcados
		?>
<hr/>
		<a class="btn btn-default" onclick="location.href='GestionFuncionalidades.php'"><?php echo $Idioma['Atras'];?></a> 
		<!-- botón que permite volver atrás -->
		<input type="button" class="btn btn-default btn-primary" data-toggle="modal" data-target="#myModal"  value="<?php echo $Idioma['Guardar']; ?>" class="continuar"/>
		<!-- botón de confirmación del formulario -->
			</div>
		</form>
	</div>
	</div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> <!-- Ventana emergente de confirmación de datos -->
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
</div> <!-- Aquí acaba la ventana emergente -->
<div class="footer logo2"></div>

<?php include("../views/footer.php");
	renderFooter(); //aqui va a ir el nombre de usuario de la sesion php
?>
