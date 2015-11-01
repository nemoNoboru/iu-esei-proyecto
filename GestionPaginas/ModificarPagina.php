<?php include("../views/header.php");
	RenderBanner("Gestión de Páginas");
?>
<div id="contenido" class="container">
	<div class="row">

<?php include("../views/lateral.php");
	RenderLateral(2);
?>

	<?php
		require_once("../php/DBManager.php");
		$man = DBManager::getInstance();
		$man->connect();
		$redirect = $man->getMinIDPag();
		if(!isset($_GET["id"])){ //cambiar por funcion que devuelva la primera id ocupada

			header('Location: ModificarPagina.php?id=' .$redirect["pag_id"].'');
		}
		else{

			echo '<div class="col-md-9 col-sm-12">';
			echo '<form action="../php/GestionPaginas/process_modificarPagina.php?="'.$_GET["id"].' method="post" '.'id="formulario">';

			require_once("../views/renderTable.php");
			require_once("../views/renderCombobox.php");
			$table_maker = new RenderTable;
			$combo_maker = new renderCombobox;

			$combo_maker->comboboxBlankPagina(); //ComboBox de Selección

			$datos = $man->getDatosPagina($_GET["id"]);
			echo '<br/>Nombre Página:<input class="form-control" type=text value="' .$datos["pag_name"].'"'. ' name="nombre" readonly><br>';
			echo 'Descripcion:<br/><textarea rows="5" cols="30" name="desc">' .$datos["pag_desc"].''. '</textarea><br>';


			$table_maker->tableFunByPag($datos["pag_name"]);

			$table_maker->tableUserByPag($datos["pag_name"]);

			echo '<button class="btn btn-default" onclick="history.go(-1)">' .$Idioma['Atras'].' </button>';
			echo '<input type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"  value="' .$Idioma['Guardar'].'" class="continuar"/>';

			echo '</form>';
			echo '</div>';
		}
	?>
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
<div class="footer logo4"></div>

</div>
<?php include("../views/footer.php");
	renderFooter();
?>
