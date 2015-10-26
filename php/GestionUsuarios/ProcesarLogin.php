<?php

require_once("../DBManager.php"); 							//Se incluye la clase que gestiona la DB
															//Usamos una funcion de DBManager para comprobar el login
$man = DBManager::getInstance(); 							//Se creaa un objeto de la calse DBManager, si ya hay alguno creado solo se devuelve el que ya hay.
$man->connect(); 											//Se conecta con la BD
session_start();  /Se inicia una sesion
$_SESSION["name"] = "anon"; 								//Esta linea no hace falta
if(!$man->tryLogin($_POST["username"],$_POST["pass"])){  	//Se recogen los datos emviados en el formulario de login y se comparan con los datos almacenados en la DB.
																//caso negativo - Vamos a error
  echo "está todo mal";
}else{
																//caso positivo - Vamos al menu pricipal
  $_SESSION["name"] = $_POST['username'];  					//Se guarda el nombre del usuario que ha iniciado sesion
  header("location:../../Menu/MenuPrincipal.php"); 			//Se va al menu principal automaticamente
}

?>
