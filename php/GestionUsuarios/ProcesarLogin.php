<?php

require_once("../DBManager.php");
//Usamos una funcion de DBManager para comprobar el login
$man = DBManager::getInstance();
$man->connect();
session_start();
$_SESSION["name"] = "anon";
if(!$man->tryLogin($_POST["username"],$_POST["pass"])){
  //caso negativo - Vamos a error
  echo "está todo mal";
}else{
  //caso positivo - Vamos al menu pricipal
  $_SESSION["name"] = $_POST['username'];
  header("location:../../Menu/MenuPrincipal.php");
}

?>
