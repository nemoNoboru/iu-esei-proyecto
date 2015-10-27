<?php include("../views/header.php"); 	//Incluye el header
	  RenderBanner("Login"); 			//Muestra el header con la funcion definida en header.php
		$len = getIdioma(); 			//Guarda en $len el array asociativo que almacena el idioma. getIdioma() esta definido en header.php
?>
  <div id='loginbox' class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class='lead'><?php echo $len['Iniciar sesion']; ?></div> <!--Muestra el titulo del formulario-->
						<!--Formulario de login, los datos se envian a "../php/GestionUsuarios/ProcesarLogin.php"-->
						<form action="../php/GestionUsuarios/ProcesarLogin.php" method="post">
							<div class="form-group">
							<?php echo $len['nick']; ?>: <input class="form-control" type="text" name="username"><br>
							<?php echo $len['Contraseña']; ?>: <input class="form-control" type="password" name="pass"><br>
							<input type="submit" name="login" value="Login">
						</div>
						</form>
				</div>
			</div>
		</div>
</body>
</html>
