<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GSTR</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/gstr.css" rel="stylesheet">
  </head>
  <body>
  <?php

  require_once "../views/renderTable.php";
  require_once "../views/renderTableGestion.php";

  //Añadido array de Idioma, se debe hacer include Idioma en la Pagina que llame a header.
	function Renderbanner($nombre){
		//Cargo la sesion apra tener acceso a los datos.
     session_start();

		//Comprobamos el valor de sesion y segun su valor cargo el array con el idioma deseado.
	  switch ($_SESSION["LE"])
		{
		case 'sp':
			include '../views/lenguaje/Spanish.php';
			break;
		case 'en':
			include '../views/lenguaje/English.php';
			break;
		case 'br':
			include '../views/lenguaje/Brasilian.php';
			break;
		DEFAULT:
			include '../views/lenguaje/English.php';
			break;
		}
    echo "<nav class='navbar navbar-inverse'>";
    echo "<div class='container-fluid'>";
    echo "<span class='navbar-brand'> GSTR </span>";
    echo "<p class='navbar-text'>".$Idioma[$nombre]."</p>";
    echo "<ul class='nav navbar-nav'>";
    echo '<li><a href="../php/CambioIdioma.php?leng=en"><img src="../views/img/ico_en.png"></a>';
    echo '<li><a href="../php/CambioIdioma.php?leng=en"><img src="../views/img/ico_es.png"></a>';
    echo '<li><a href="../php/CambioIdioma.php?leng=en"><img src="../views/img/icono_br.png"></a>';
    echo '</ul>';
    echo "</div>";
    echo "</nav>";
		//echo '<div id="header"> <span class="cabecera"> GSTR </span>'.($Idioma[$nombre]).'</div>';

		//Prueba temporal para comprobar que funciona bien.
		echo 'Sesion: '.$_SESSION["LE"];
	}
  ?>
