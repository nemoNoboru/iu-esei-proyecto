<?php include ("../views/header.php");
	RenderBanner("Gestión de Roles");
?>

<?php include ("../views/lateral.php");
        RenderLateral (1);
?>
	<div id="contenido">
	<form action="../php/GestionRoles/process_GestionRoles.php" method="post">
	<div class="tabla">
		<table>
    	<tr><th>Rol</th><th>Descripción</th><th>Eliminar</th></tr>
    	<tr><td>Rol 1</td><td>Descripción Rol 1</td><td><button>x</button></td></tr>
    	<tr><td>Rol 2</td><td>Descripción Rol 2</td><td><button>x</button></td</tr>
    	<tr><td>Rol 3</td><td>Descripción Rol 3</td><td><button>x</button></td></tr>
    	<tr><td>Rol 4</td><td>Descripción Rol 4</td><td><button>x</button></td>
    </tr>
</table>
</div><br>
</form>
<button onclick="location.href='CrearRol.php'">Crear</button>
<button onclick="location.href='ModificarRol.php'">Modificar</button>
</div>
<?php include ("../views/footer.php");
        RenderFooter("Admin");
?>
