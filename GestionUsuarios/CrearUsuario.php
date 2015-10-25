<?php include("../views/header.php");
	RenderBanner("Gestión de Usuarios");
?>

<div class="container">
	<div class="row">
		<?php include("../views/lateral.php");
			RenderLateral(0);
		?>
		<div class="col-md-9 col-sm-12">
			<form action="../php/GestionUsuarios/process_crearUsuario.php" method="post">
				<div class="form-group">
					<h1>Crear Usuario</h1>
					Nombre: <input type="text" class="form-control" name="nombre"><br/>
					Descripción/Detalles: <input class="form-control" type="text" name="desc"><br/>
					email: <input type="text" class="form-control" name="email"><br/>
					Contraseña: <input type="password" class="form-control" name="pass1"><br/>
    		Repetir Contraseña: <input type="password" class="form-control" name="pass2"><br/>

				<?php
				$table_maker = new RenderTable;
				$table_maker->tableBlankRol();
				?>

				<?php
				$table_maker->tableBlankPagina();
				?>


				<?php
				$table_maker->tableBlankFuncionalidad();
				?>

	  		<button class="btn btn-default" onclick="history.go(-1)">Atrás</button>
				<input class="btn btn-default" type="submit" value="Guardar" class="continuar"/>
			</div>
			</form>
		</div>
	</div>


<?php include("../views/footer.php");
	renderFooter(); //aqui va a ir el nombre de usuario de la sesion php
?>
