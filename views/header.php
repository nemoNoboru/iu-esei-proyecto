<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GSTR</title>

    <link href="css/gstr.css" rel="stylesheet">
  </head>
  <body>
  <?php
  require_once "../views/renderTable.php";
  //Añadido array de Idioma, se debe hacer include Idioma en la Pagina que llame a header.
	function Renderbanner($nombre){
		echo '<div id="header"> <span class="cabecera">GSTR</span>'.$Idioma[$nombre].'</div>';
	}
  ?>
