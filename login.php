<?php include("views/header.php");
	  RenderBanner("Login");
?>
<?php include("views/lateral.php");
	renderLateral(2);

 ?>
    <div id='loginbox'>
	<div class='T1'>Autentificación</div>
	<form action="php/ProcesarLogin.php" method="post">
	ID: <input type="text" name="Nombre de Usuario"><br>
	Contraseña: <input type="text" name="Contraseña"<br>
	<input type="submit" name="login">
	</form>

	</div>

</body>
</html>
