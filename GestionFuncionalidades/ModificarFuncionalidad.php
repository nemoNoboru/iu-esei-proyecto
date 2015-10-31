<?php include("../views/header.php");
	RenderBanner("Gestión de Funcionalidades");
?>

<?php include("../views/lateral.php");
	RenderLateral(3);
?>

<div id="contenido" class="container">
	<div class="row">
	<?php
		require_once("../php/DBManager.php");
		$man = DBManager::getInstance();
		$man->connect();
		$redirect = $man->getMinIDFun();
		if(!isset($_GET["id"])){ //cambiar por funcion que devuelva la primera id ocupada

			header('Location: ModificarFuncionalidad.php?id=' .$redirect["fun_id"].'');
		}
		else{

			echo '<div class="col-md-9 col-sm-12">';
			echo '<form action="../php/GestionFuncionalidades/process_modificarFuncionalidad.php?="'.$_GET["id"].' method="post" '.'id="formulario">';

			require_once("../views/renderTable.php");

			$table_maker = new RenderTable;

			//---------------------LLAMADA A RENDERCOMBOBOX AQUI---------------------

			$datos = $man->getDatosFuncion($_GET["id"]);
			echo 'Nombre Funcionalidad:<input class="form-control" type=text value="' .$datos["fun_name"].'"'. ' name="nombre" readonly><br>';
			echo 'Descripcion:<textarea rows="5" cols="30" name="desc">' .$datos["fun_desc"].''. '</textarea><br>';

			$table_maker->tablePagByFun($datos["fun_name"]);

			$table_maker->tableRolByFun($datos["fun_name"]);

			$table_maker->tableUserByFun($datos["fun_name"]);

			echo '<button class="btn btn-default" onclick="history.go(-1)">' .$Idioma['Atras'].' </button>';
			echo '<input type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"  value="' .$Idioma['Guardar'].'" class="continuar"/>';
				
			echo '</form>';
			echo '</div>';
		}
	?>
</div>





<!--
	<form method=post action="../php/GestionFuncinalidades/process_ModificarFunc.php" method="post">
		<h1>Modificar Funcionalidad</h1>
		<div>
		Seleccionar Funcionalidad
		<select name="SelectFun">
		   <option value="F1" selected="selected">Funcionalidad 1</option>
		   <option value="F2">Funcionalidad 2</option>
		   <option value="F3">Funcionalidad 3</option>
		   <option value="F4">Funcionalidad 4</option>
		</select><br>
		Nombre Funcionalidad:<input type=text name="nombre"><br>
		Descripcion:<textarea rows="5" cols="30" name="comentarios"></textarea><br>
		</div>

		<div class="tabla">
			<table>
				<tr><th>Pagina</th></tr>
				<tr><td>Pagina1</td><td><input type="checkbox" name="pagina1"/></td></tr>
				<tr><td>Pagina2</td><td><input type="checkbox" name="pagina2"/></td></tr>
				<tr><td>Pagina3</td><td><input type="checkbox" name="pagina3"/></td></tr>
				<tr><td>Pagina4</td><td><input type="checkbox" name="pagina4"/></td></tr>
			</table>
		</div>

		<div class="tabla">
			<table>
				<tr><th>Roles</th></tr>
				<tr><td>Roles1</td><td><input type="checkbox" name="Roles1"/></td></tr>
				<tr><td>Roles2</td><td><input type="checkbox" name="Roles2"/></td></tr>
				<tr><td>Roles3</td><td><input type="checkbox" name="Roles3"/></td></tr>
				<tr><td>Roles4</td><td><input type="checkbox" name="Roles4"/></td></tr>
			</table>
		</div>

		<div class="tabla">
			<table>
				<tr><th>Usuario</th></tr>
				<tr><td>Usuario1</td><td><input type="checkbox" name="Usuario1"/></td></tr>
				<tr><td>Usuario2</td><td><input type="checkbox" name="Usuario2"/></td></tr>
				<tr><td>Usuario3</td><td><input type="checkbox" name="Usuario3"/></td></tr>
				<tr><td>Usuario4</td><td><input type="checkbox" name="Usuario4"/></td></tr>
			</table>
		</div>

		<button onclick="history.go(-1)">Atrás</button>
		<input type="submit" value="Guardar" class="continuar"/>

	</form>
-->

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
