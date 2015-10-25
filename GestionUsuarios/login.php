<?php include("../views/header.php");
	  RenderBanner("Login");
		$len = getIdioma();
?>
  <div id='loginbox' class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class='lead'><?php echo $len['Iniciar sesion']; ?></div>
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
