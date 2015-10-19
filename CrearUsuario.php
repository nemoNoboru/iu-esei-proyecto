<?php include("views/header.php");
	RenderBanner("Gestion de Usuario");
?>

<?php include("views/lateral.php");
	RenderLateral(0);
?>

<div id="contenido">
	<form action="php/process_crearUsuario.php" method="post">

		<h1>Crear Usuario</h1>
		Nombre: <input type="text" name="nombre"><br/>
		<!-- Apellidos: <input type="text" name="apellidos"><br/> solo como idea, estos dos campos se juntan en nombre-->
		email: <input type="text" name="email"><br/>
		Contraseña: <input type="password" name="pass1"><br/>
    Repetir Contraseña: <input type="password" name="pass2"><br/>

		<div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
			<table>
				<tr><th>Roles</th><th>Permitir</th></tr>
				<tr><td>Roles1</td><td><input type="checkbox" name="Roles1"/></td></tr>
				<tr><td>Roles2</td><td><input type="checkbox" name="Roles2"/></td></tr>
				<tr><td>Roles3</td><td><input type="checkbox" name="Roles3"/></td></tr>
				<tr><td>Roles4</td><td><input type="checkbox" name="Roles4"/></td></tr>
			</table>
		</div>

		<div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
			<table>
				<tr><th>Paginas</th><th>Permitir</th></tr>
				<tr><td>Pagina1</td><td><input type="checkbox" name="pagina1"/></td></tr>
				<tr><td>Pagina2</td><td><input type="checkbox" name="pagina2"/></td></tr>
				<tr><td>Pagina3</td><td><input type="checkbox" name="pagina3"/></td></tr>
				<tr><td>Pagina4</td><td><input type="checkbox" name="pagina4"/></td></tr>
			</table>
		</div>


    <div class="tabla"> <!-- esta tabla va a ser creada dinamicamente en un futuro -->
			<table>
				<tr><th>Funcionalidades</th><th>Permitir</th></tr>
				<tr><td>Funcion1</td><td><input type="checkbox" name="funcion1"/></td></tr>
				<tr><td>Funcion2</td><td><input type="checkbox" name="funcion2"/></td></tr>
				<tr><td>Funcion3</td><td><input type="checkbox" name="funcion3"/></td></tr>
				<tr><td>Funcion4</td><td><input type="checkbox" name="funcion4"/></td></tr>
			</table>
		</div>

	  <input type="submit" onclick="history.go(-1)" value="Atras">
		<input type="submit" value="Guardar" class="continuar"/>

	</form>
</div>

<?php include("views/footer.php");
	renderFooter("Admin"); //aqui va a ir el nombre de usuario de la sesion php
?>
