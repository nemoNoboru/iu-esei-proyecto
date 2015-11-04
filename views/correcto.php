<?php include("../views/header.php");
	  RenderBanner("Login");
		$len = getIdioma();
		$checked = $_GET['ID'];
?>
  <div id='loginbox' class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class='lead'><?php echo $len['Exito']." : "; ?></div>
				<div class='lead'><?php echo $len[$checked]; ?></div>
					<a class="btn btn-default" href="../../Menu/MenuPrincipal.php"><?php echo $len['Menu Principal']; ?></a>
				</div>
			</div>
		</div>
</body>
</html>
