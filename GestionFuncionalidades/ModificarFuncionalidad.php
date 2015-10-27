<?php include("../views/header.php");
	RenderBanner("Gestión de Funcionalidades");
?>

<?php include("../views/lateral.php");
	RenderLateral(3);
?>

<div id="contenido">

	<?php
		if(!isset($_GET["id"])){
			header('Location: ModificarFuncionalidad.php?id=1');
		}
		else{
			require_once("../php/DBManager.php");
			$man = DBManager::getInstance();
			$man->connect();
			$datos = $man->getDatosFuncion($_GET["id"]);
			echo 'Nombre Funcionalidad:<input type=text value=' .$datos["1"]. 'name="nombre"><br>';
			echo 'Descripcion:<textarea rows="5" cols="30" name="comentarios"></textarea><br>';
















		}

	?>






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

<button onclick="history.go(-1)">Atrás</button>

</div>
<?php include("../views/footer.php");
	renderFooter();
?>
