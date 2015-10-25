<?php
	function renderFooter(){
		echo "<footer>";
		echo "<p class='text-muted'>";
		if(isset($_SESSION['name'])){
			echo "<span class='username'>".$_SESSION["name"]."</span>";
		}else{
			echo "<span class='username'>anon</span>";
		}
		echo "<a href='../../GestionUsuarios/login.php'><span  class='text-right'> Salir</span></a>";
		echo "</footer>";
	}
?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
