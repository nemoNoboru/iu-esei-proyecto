<?php include("../views/header.php");
	  RenderBanner("Login");
		$len = getIdioma();
		$error = $_GET['ID'];
?>
  <div id='loginbox' class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 box">
				<div class='lead'><?php echo $len['Ha ocurrido un error']." : "; ?></div>
				<p class="text-center"><?php echo $len[$error]; ?></p><br/>
				<p class="text-center"><button class="btn btn-default" onclick="history.go(-1)"><?php echo $len['Atras']; ?></button></p>
			</div>
		</div>
	</div>
</body>
</html>
