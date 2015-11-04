<?php include("../views/header.php");
	RenderBanner("Gestión de Roles");
?>

<div id="contenido" class="container">
	<div class="row">
<?php include("../views/lateral.php");
	RenderLateral(1);
?>

	<?php
		require_once("../php/DBManager.php");
		$man = DBManager::getInstance();
		$man->connect();
		$redirect = $man->getMinIDRol();
		if(!isset($_GET["id"])){ //cambiar por funcion que devuelva la primera id ocupada

			header('Location: ModificarRol.php?id=' .$redirect["rol_id"].'');
		}
		else{

			echo '<div class="col-md-9 col-sm-12">';
			echo '<form action="../php/GestionRoles/process_modificarRol.php?="'.$_GET["id"].' method="post" '.'id="formulario">';

			require_once("../views/renderTable.php");
			require_once("../views/renderCombobox.php");
			$table_maker = new RenderTable;
			$combo_maker = new renderCombobox;

			$combo_maker->comboboxBlankRol(); //ComboBox de Selección

			$datos = $man->getDatosRol($_GET["id"]);
			echo '<br/>Nombre Rol:<input class="form-control" type=text value="' .$datos["rol_name"].'"'. ' name="nombre" readonly><br>';
			echo 'Descripcion:<br/><textarea rows="5" cols="30" name="desc">' .$datos["rol_desc"].''. '</textarea><br>';

			$table_maker->tableUserByRol($datos["rol_name"]);

			$table_maker->tableFunByRol($datos["rol_name"]);

			echo '<button class="btn btn-default" onclick="location.href=\'GestionRoles.php\'">' .$Idioma['Atras'].' </button>';
			echo '<input type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"  value="' .$Idioma['Guardar'].'" class="continuar"/>';

			echo '</form>';
			echo '</div>';
		}
	?>
</div>

<?php include("../views/popup.php");?>
<div class="footer logo1"></div>
<?php include("../views/footer.php");
	renderFooter();
?>
