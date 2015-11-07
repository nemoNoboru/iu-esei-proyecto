<!-- Vista de paginas de ayuda por Fvieira -->
<?php include('header.php'); ?>
<div class="container">
	<div class="row">
	<div class=" col-md-offset-6 col-md-6 col-sm-12 box">
<?php
  function ayudaHeader($header){
    echo "<div class='lead'>".$header."</div>";
  }
  function ayudaLink($data,$url){
    echo '<a class="btn btn-default" onclick="location.href='.$url.'">'.$data.'</a>';
  }
?>
