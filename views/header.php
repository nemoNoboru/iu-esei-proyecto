<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GSTR</title>

    <link href="css/gstr.css" rel="stylesheet">
  </head>
  <body>
  <p>
	<!-- Estes enlaces invocan a la funcion cambiar idioma enviando la variable $leng con su valor correspondiente-->
	|<a href="../php/CambioIdioma.php?leng=en"><img src='../views/img/ico_en.png'></a> |
	<a href="../php/CambioIdioma.php?leng=sp"><img src='../views/img/ico_es.png'></a> |
	<a href="../php/CambioIdioma.php?leng=br"><img src='../views/img/icono_br.png'></a> |
  </p>

  <?php
  require_once "../views/renderTable.php";
  require_once "../views/renderTableGestion.php";
  
  //Añadido array de Idioma, se debe hacer include Idioma en la Pagina que llame a header.
	function Renderbanner($nombre){
		//Cargo la sesion apra tener acceso a los datos.
		@session_start();
		//Comprobamos el valor de sesion y segun su valor cargo el array con el idioma deseado.
	  switch ($_SESSION["LE"])
		{
		case 'sp':
			include '../views/lenguaje/spanish.php';
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
		echo '<div id="header"> <span class="cabecera"> GSTR </span>'.($Idioma[$nombre]).'</div>';
		
		//Prueba temporal para comprobar que funciona bien.
		echo 'Sesion: '.$_SESSION["LE"];
	}
  ?>
