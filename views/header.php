<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GSTR</title>

    <link href="css/gstr.css" rel="stylesheet">
  </head>
  <body>
 
 <?php
  //Añadido array de Idioma, se debe hacer include Idioma en la Pagina que llame a header.

	
	function Renderbanner($nombre){
		  include "lenguaje/English.php";

		echo '<div id="header"> <span class="cabecera"> GSTR </span>'.($Idioma[$nombre]).'</div>';
	}
  ?>

