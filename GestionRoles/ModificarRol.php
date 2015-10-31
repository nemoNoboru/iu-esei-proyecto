<?php include ("../views/header.php");
    RenderBanner("Gestión de Roles");
?>

<div id="contenido" class="container">
	<div class="row">
		<?php include("../views/lateral.php");
			RenderLateral(1);
		?>
		<div class="col-md-9 col-sm-12">
	    <form action="../php/GestionRoles/process_ModificarRol.php" method="post" id="formulario">
		<div class="form-group">
            <h1>Modificar Rol</h1>
            Seleccionar Rol: <SELECT NAME="Lista"><OPTION>Rol 1 <OPTION>Rol 2 <OPTION>Rol 3 </SELECT><br><br>
            Nombre: <INPUT TYPE="text" NAME="nombre" SIZE=19 MAXLENGTH=19><br><br>
            Descripción:   <TEXTAREA COLS="20" ROWS="1" NAME="desc"></TEXTAREA> <br><br>
        </form>

        <div class="tabla">
    			<table>
    				<tr><th>Usuarios</th></tr>
    				<tr><td>Usuario1</td><td><input type="checkbox" name="Usuario1"/></td></tr>
    				<tr><td>Usuario2</td><td><input type="checkbox" name="Usuario2" checked="yes"/></td></tr>
    				<tr><td>Usuario3</td><td><input type="checkbox" name="Usuario3"/></td></tr>
    				<tr><td>usuario4</td><td><input type="checkbox" name="usuario4" checked="yes"/></td></tr>
    			</table>
  		  </div>

  		    <div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
      			<table>
              <tr><th>Funcionalidades</th></tr>
      				<tr><td>Función 1</td><td><input type="checkbox" name="Funcionalidad1"/></td></tr>
      				<tr><td>Función 2</td><td><input type="checkbox" name="Funcionalidad2" checked="yes"/></td></tr>
      				<tr><td>Función 3</td><td><input type="checkbox" name="Funcionalidad3"/></td></tr>
      				<tr><td>Función 4</td><td><input type="checkbox" name="Funcionalidad4" checked="yes"/></td></tr>
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