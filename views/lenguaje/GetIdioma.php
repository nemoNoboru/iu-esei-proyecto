<?php
//Funcion que nos detecta el idioma y retorna el idioma detectado.

function CargaIdioma()
{

	//incluimos el array de idioma correspondiente con el indicado en la session
	switch ($_SESSION['idioma'])
	{
	case 'espanhol':
		include '../views/lenguaje/Spanish.php';
		break;
	case 'english':
		include '../views/lenguaje/English.php';
		break;
	DEFAULT:
		include '../views/lenguaje/Spanish.php';
		break;
	}
	return $Idioma;
}

>