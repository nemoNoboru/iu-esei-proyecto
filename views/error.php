<?php include("../views/header.php");
		include("../views/errores/errores.php");
	  RenderBanner("Login");
		$len = getIdioma();
		$error = $_GET['ID'];
?>
  <div id='loginbox' class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class='lead'><?php echo $len['Ha ocurrido un error'].$errores[$error]; ?></div>
					<button><a href="<?=$_SERVER["HTTP_REFERER"]?>">Por retrasado, piensa anda...</a>
				</div></button>
			</div>
		</div>
</body>
</html>