<?php
//Funcion que nos detecta el idioma y retorna el idioma detectado.

function CargaIdioma()
{

	//incluimos el array de idioma correspondiente con el indicado en la session
	//Simplemente recivo el idioma elegido y mediante la siguiente funcion carga 
	//el arrai correspondiente al idioma.
	switch ($_SESSION['idioma'])
	{
	case 'espanhol':
		include 'Spanish.php';
		break;
	case 'english':
		include 'English.php';
		break;
	DEFAULT:
		include 'Spanish.php';
		break;
	}
	return $Idioma;
}

>