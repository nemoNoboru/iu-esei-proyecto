<?php include("../views/header.php");
	RenderBanner("Gestión de Páginas");
	$Idioma = getIdioma();
?>


<div id="contenido" class="container">
<div class="row">
		<?php include("../views/lateral.php");
			RenderLateral(2);
		?>
		<div class="col-md-9 col-sm-12">
	<form action="../php/GestionPaginas/process_modificarPagina.php" method="post" id="formulario">
	<div class="form-group">
		<h1>Modificar Pagina</h1>
			<div class="tabla">
				<table>
					<tr><th>URL</th><th colspan='3'>ROLES</th></tr>
					<tr><td>URL 1</td><td><input type="checkbox" name="opcion1" value="check1">rol1</td><td><input type="checkbox" name="opcion1" value="check1">rol2</td><td><input type="checkbox" name="opcion1" value="check1">rol3</td></tr>
					<tr><td>URL 2</td><td><input type="checkbox" name="opcion1" value="check1">rol1</td><td><input type="checkbox" name="opcion1" value="check1">rol2</td><td><input type="checkbox" name="opcion1" value="check1">rol3</td></tr>
					<tr><td>URL 3</td><td><input type="checkbox" name="opcion1" value="check1">rol1</td><td><input type="checkbox" name="opcion1" value="check1">rol2</td><td><input type="checkbox" name="opcion1" value="check1">rol3</td></tr>
					<tr><td>URL 4</td><td><input type="checkbox" name="opcion1" value="check1">rol1</td><td><input type="checkbox" name="opcion1" value="check1">rol2</td><td><input type="checkbox" name="opcion1" value="check1">rol3</td></tr>
				</table>
			</div>


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
</div>
<div class="footer logo4"></div>
<?php include("../views/footer.php");
	renderFooter();
?>
