<?php include("../views/header.php");
	  RenderBanner("Login");
		$len = getIdioma();
		$error = $_GET['ID'];
?>
  <div id='loginbox' class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class='lead'><?php echo $len['Ha ocurrido un error']." : "; ?></div>
				<div class='lead'><?php echo $len[$error]; ?></div>
				<button onclick="history.go(-1)"><?php echo $len['Atras']; ?></button>
			</div>
		</div>
	</div>
</body>
</html>