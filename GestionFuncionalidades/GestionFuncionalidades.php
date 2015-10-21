<?php include("../views/header.php");
	RenderBanner("Gestión de Funcionalidades");
?>

<?php include("../views/lateral.php");
	RenderLateral(3); //gestion paginas esta el 2 en el array de lateral
?>

<div id="contenido">
	<div class="tabla">
		<table>
			<tr><th>Funcionalidad</th><th>Descripción</th><th>Eliminar</th></tr>
			<tr><td>Funcionalidad1</td><td>Datos funcion 1</td><td><button>x</button></tr>
			<tr><td>Funcionalidad1</td><td>Datos funcion 2</td><td><button>x</button></tr>
			<tr><td>Funcionalidad1</td><td>Datos funcion 3</td><td><button>x</button></tr>
			<tr><td>Funcionalidad1</td><td>Datos funcion 4</td><td><button>x</button></tr>
		</table>
	</div>

		<button onclick="location.href='CrearFuncionalidad.php'">Crear</button>
		<button onclick="location.href='ModificarFuncionalidad.php'">Modificar</button>

</div>

<?php include("../views/footer.php");
	renderFooter("Admin");
?>
