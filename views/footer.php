<?php
	function renderFooter($nombre){
		echo "<div id='footer'> ";
		echo $_SESSION["name"];
		echo " <span class='salir'><a href='../../GestionUsuarios/login.php'>Salir</a></span></div>";
	}
?>
</body>
</html>
