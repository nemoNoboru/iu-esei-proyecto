<?php include("../views/header.php");
	RenderBanner("Gestión de Páginas");
?>

<?php include("../views/lateral.php");
	RenderLateral(2);
?>
<div id="contenido">

		<div>
			<select name="Funcionalidad">
			  <option value="F1" selected="selected">Funcionalidad 1</option>
			  <option value="F2">Funcionalidad 2</option>
			  <option value="F3">Funcionalidad 3</option>
			  <option value="F4">Funcionalidad 4</option>
			</select>
		</div>

		<div class="tabla">
			<table>
				<tr><th>URL</th><th>Roles</th><th><button>Crear</button></th></tr>
				<tr><td>/url1</td><td>Rol1</td><td><button>Editar</button></td><td><button>x</button></td></tr>
				<tr><td>/url1</td><td>Rol1</td><td><button>Editar</button></td><td><button>x</button></td></tr>
				<tr><td>/url1</td><td>Rol1</td><td><button>Editar</button></td><td><button>x</button></td></tr>
			</table>
		</div>
		<button onclick="location.href='CrearPagina.php'">Crear</button>
		<button onclick="location.href='ModificarPagina.php'">Modificar</button>
</div>

<?php include("../views/footer.php");
	renderFooter("Admin");
?>
