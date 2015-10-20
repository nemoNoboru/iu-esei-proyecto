<?php include("../views/header.php");
	RenderBanner("Gestión de Páginas");
?>

<?php include("../views/lateral.php");
	RenderLateral(2);
?>
<div id="contenido">
	<form action="../php/GestionPaginas/process_modificarPagina.php" method="post">
		<h1>Modificar Funcionalidad</h1>
			<div class="tabla">
				<table>
					<tr><th>URL</th><th colspan='3'>ROLES</th></tr>
					<tr><td>URL 1</td><td><input type="checkbox" name="opcion1" value="check1">rol1</td><td><input type="checkbox" name="opcion1" value="check1">rol2</td><td><input type="checkbox" name="opcion1" value="check1">rol3</td></tr>
					<tr><td>URL 2</td><td><input type="checkbox" name="opcion1" value="check1">rol1</td><td><input type="checkbox" name="opcion1" value="check1">rol2</td><td><input type="checkbox" name="opcion1" value="check1">rol3</td></tr>
					<tr><td>URL 3</td><td><input type="checkbox" name="opcion1" value="check1">rol1</td><td><input type="checkbox" name="opcion1" value="check1">rol2</td><td><input type="checkbox" name="opcion1" value="check1">rol3</td></tr>
					<tr><td>URL 4</td><td><input type="checkbox" name="opcion1" value="check1">rol1</td><td><input type="checkbox" name="opcion1" value="check1">rol2</td><td><input type="checkbox" name="opcion1" value="check1">rol3</td></tr>
				</table>
			</div>
			<input type="submit" onclick="history.go(-1)" value="Atras">
			<input type="submit" value="continuar" class="continuar"/>
	</form>
</div>
<?php include("../views/footer.php");
	renderFooter("Admin");
?>
