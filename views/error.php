<?php include("../views/header.php");
	  RenderBanner("Ha ocurrido un error");
		$len = getIdioma();
		$error = $_GET['ID'];
?>
  <div id='loginbox' class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 box">
				<div class='lead errorb'><?php echo $len['Ha ocurrido un error']." : "; ?></div>
				<p class="text-center"><?php echo $len[$error]; ?></p><br/>
				<?php
				if($_GET["ID"]=='e6'){
					echo '<p class="text-center"><a class="btn btn-default" href="../GestionUsuarios/login.php">'.$len['Reintentar'].'</a></p><br>';
				}else{
					echo '<p class="text-center"><a class="btn btn-default" href="../Menu/MenuPrincipal.php">'.$len['Menu Principal'].'</a></p><br>';
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>
