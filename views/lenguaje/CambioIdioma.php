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

// invocamos la pagina desde donde se llamo a esta
header("location: ".$salto." "); 

?> 
