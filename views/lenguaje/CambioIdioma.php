<?php
//Pagina para detectar y mostrar idioma.

// Recibimos el nuevo idioma a mostrar
$Lenguaje = $_GET['idioma'];

// iniciamos sesion
session_start();

// Sustituimos la variable de sesion de idioma por el nuevo valor
$_SESSION['idioma'] = $Lenguaje;

// obtenemos el nombre de la pagina que llamo a esta 
// guardamos en $salto el string con el nombre de la pagina desde el ultimo /
$salto = strrchr($_SERVER['HTTP_REFERER'],'/');

// eliminamos el / del nombre de la pagina
$salto = str_replace('/','',$salto);

//en el caso de que la pagina de vuelta sea ProcesarLogin.php o ProcesarRegistro.php lo
//enviaremos a Login.php o Registro.php
if (!strpos($salto,'ProcesarLogin'))
	$salto = 'ruta/Login.php';	//aqui la ruta que corresponda



// invocamos la pagina desde donde se llamo a esta
header("location: ".$salto." "); 

?> 
