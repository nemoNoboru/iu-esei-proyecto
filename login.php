<?php include("views/header.php");
	  RenderBanner("Login");
?>
    <div id='loginbox'>
	<div class='T1'>Autentificación</div>
	<form action="php/ProcesarLogin.php" method="post">
	ID: <input type="text" name="username"><br>
	Contraseña: <input type="text" name="pass"><br>
	<input type="submit" name="login">
	</form>

	</div>

</body>
</html>
