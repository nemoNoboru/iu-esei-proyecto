<?php include("../views/header.php");//Incluye el header
	RenderBanner("Gestión de Funcionalidades"); //Muestra el header con la funcion definida en header.php
	$Idioma = getIdioma(); //Obtiene el idioma que se está usando para modificar los literales de la página
?>

<div id="contenido" class="container"> <!-- Este div llega hasta footer, representa toda la interfaz principal -->
	<div class="row">
<?php include("../views/lateral.php");
	RenderLateral(3);
?>

	<?php
		require_once("../php/DBManager.php");
		$man = DBManager::getInstance(); //crea instancia
		$man->connect(); //conectate a la bbdd
		if(!$redirect = $man->getMinIDFun()){
			header('Location: ../views/error.php?ID=e15');
		}
		else{
			if(!isset($_GET["id"])){ //cambiar por funcion que devuelva la primera id ocupada

				header('Location: ModificarFuncionalidad.php?id=' .$redirect["fun_id"].'');
			}
			else{

				echo '<div class="col-md-9 col-sm-12">';
				echo '<form action="../php/GestionFuncionalidades/process_modificarFuncionalidad.php?="'.$_GET["id"].' method="post" '.'id="formulario">';

				require_once("../views/renderTable.php");
				require_once("../views/renderCombobox.php");
				$table_maker = new RenderTable;		// Crea un objeto RenderTable
				$combo_maker = new renderCombobox;	// Crea un objeto renderCombobox
				echo "<h1>";
				echo $Idioma['Modificar funcionalidad'];
				makeTooltip($Idioma['tmf'],$Idioma['dmf']);
				echo '</h1>';
				echo '<br/>'.$Idioma['Seleccione funcionalidad'].':';
				$combo_maker->comboboxBlankFuncionalidad(); //ComboBox de Selección que es rellenado con las funcionalidades desmarcadas

				$datos = $man->getDatosFuncion($_GET["id"]);
				echo '<br/>'.$Idioma['Nombre funcionalidad'].':<input class="form-control" type=text value="' .$datos["fun_name"].'"'. ' name="nombre" readonly><br>';
				echo $Idioma['Descripcion'].':<br/><textarea rows="5" cols="30" name="desc">' .$datos["fun_desc"].''. '</textarea><br>';


				$table_maker->tablePagByFun($datos["fun_name"]);	// usa la tablaCreada para llamar a una función con una lista de todas las páginas que tiene asignada esta funcionalidad

				$table_maker->tableRolByFun($datos["fun_name"]);	// usa la tablaCreada para llamar a una función con una lista de todas los roles que tiene asignada esta funcionalidad

				$table_maker->tableUserByFun($datos["fun_name"]);	// usa la tablaCreada para llamar a una función con una lista de todas los usuarios que tiene asignada esta funcionalidad
			echo '<hr/>';
				echo '<a class="btn btn-default btn-primary" onclick="location.href=\'GestionFuncionalidades.php\'">' .$Idioma['Atras'].' </a>';
				// botón que permite volver atrás
				echo ' <input type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"  value="' .$Idioma['Guardar'].'" class="continuar"/>';
				// confirma los cambios
				echo '</form>';
				echo '</div>';
			}
		}
	?>
</div>

<?php include("../views/popup.php");?>
<div class="footer logo2"></div>
<?php include("../views/footer.php");	//Incluye el footer
  renderFooter(); 						//Muestra el footer con la funcion definida en footer.php
?>
