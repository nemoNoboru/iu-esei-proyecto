<?php include("../views/header.php");		//Incluye el header
	RenderBanner("Gestión de Usuarios");	//Muestra el header con la funcion definida en header.php
	$Idioma = getIdioma();					//Guarda en $Idioma el array asociativo que almacena el idioma. getIdioma() esta definido en header.php
?>

<div class="container">
	<div class="row">
		<?php include("../views/lateral.php");	//Incluye el menu lateral
			RenderLateral(0);					//Muestra el menu lateral con la funcion definida en lateral.php
		?>
		<div class="col-md-9 col-sm-12">
		
			<!--Formulario de creacion de usuario, los datos se envian a "../php/GestionUsuarios/process_crearUsuario.php"-->
			
			<form action="../php/GestionUsuarios/process_crearUsuario.php" method="post">
				<div class="form-group">
					<h1><?php echo $Idioma['Crear usuario']; ?></h1>
					<?php echo $Idioma['Nombre'];?>: <input type="text" class="form-control" name="nombre"><br/>
					<?php echo $Idioma['Descripcion']; ?>: <input class="form-control" type="text" name="desc"><br/>
					<?php echo $Idioma['Correo electronico']; ?>: <input class="form-control" type="text" name="email"><br/>
					<?php echo $Idioma['Contraseña']; ?>: <input type="password" class="form-control" name="pass1"><br/>
    		<?php echo $Idioma['Repetir contraseña']; ?>: <input type="password" class="form-control" name="pass2"><br/>

				<?php										//Aqui no se incluye la clase RenderTableGestion porque ya se incluye en el header
				$table_maker = new RenderTable;				//Se crea un Objeto que va a crear las tablas que no son de gestion
				$table_maker->tableBlankRol();				//Se muestra la tabla donde se seleccionan los roles a los que pertenece el usuario
				?>

				<?php
				$table_maker->tableBlankPagina();			//Se muestra la tabla donde se seleccionan las paginas a las que accede el usuario
				?>


				<?php
				$table_maker->tableBlankFuncionalidad();	//Se muestra la tabla donde se seleccionan las funcionalidades que tiene que ejecutar el usuario
				?>

	  		<button class="btn btn-default" onclick="history.go(-1)"><?php echo $Idioma['Atras']; ?></button>					<!--Boton para cancelar y retroceder-->
				<input class="btn btn-default" type="submit" value="<?php echo $Idioma['Guardar']; ?>" class="continuar"/>		<!--Boton para enviar el formulario-->
			</div>
			</form>
		</div>
	</div>
</div>

<?php include("../views/footer.php");	//Incluye el footer
	renderFooter(); 					//Muestra el footer con la funcion definida en footer.php
?>
