<?php include("../views/header.php");
	RenderBanner("Gestión de Usuarios");
	include("../views/renderCombobox.php");
	$mk_combo = new renderCombobox;
	$Idioma = getIdioma();
?>


<div id="contenido">
	<div class="row">
		<?php include("../views/lateral.php");
			RenderLateral(0);
		?>
		<div class="col-md-9 col-sm-12">
			<form action="../php/GestionUsuarios/process_crearUsuario.php" method="post" id="formulario">
				<div class="form-group">
					<h1>Modificar Usuario</h1>
					<div>
			Seleccionar Funcionalidad
				<select name="SelectUser">
				   <option value="ID1" selected="selected">ID1</option>
				   <option value="ID2">ID2</option>
				   <option value="ID3">ID3</option>
				   <option value="ID4">ID4</option>
				</select><br>
				Nombre: <input type="text" name="nombre"><br/>
				Apellidos: <input type="text" name="apellidos"><br/>
				email: <input type="text" name="email"><br/>
				Contraseña: <input type="password" name="pass1"><br/>
			Repetir Contraseña: <input type="password" name="pass2"><br/>
					</div>
				<div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
					<table>
						<tr><th>Roles</th></tr>
						<tr><td>Roles1</td><td><input type="checkbox" name="Roles1"/></td></tr>
						<tr><td>Roles2</td><td><input type="checkbox" name="Roles2"/></td></tr>
						<tr><td>Roles3</td><td><input type="checkbox" name="Roles3"/></td></tr>
						<tr><td>Roles4</td><td><input type="checkbox" name="Roles4"/></td></tr>
					</table>
				</div>

				<div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
					<table>
						<tr><th>Paginas</th></tr>
						<tr><td>Pagina1</td><td><input type="checkbox" name="pagina1"/></td></tr>
						<tr><td>Pagina2</td><td><input type="checkbox" name="pagina2"/></td></tr>
						<tr><td>Pagina3</td><td><input type="checkbox" name="pagina3"/></td></tr>
						<tr><td>Pagina4</td><td><input type="checkbox" name="pagina4"/></td></tr>
					</table>
				</div>


			<div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
					<table>
						<tr><th>Funcionalidades</th></tr>
						<tr><td>Funcion1</td><td><input type="checkbox" name="funcion1"/></td></tr>
						<tr><td>Funcion2</td><td><input type="checkbox" name="funcion2"/></td></tr>
						<tr><td>Funcion3</td><td><input type="checkbox" name="funcion3"/></td></tr>
						<tr><td>Funcion4</td><td><input type="checkbox" name="funcion4"/></td></tr>
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

<?php include("../views/footer.php");
	renderFooter();
?>
