<?php include("DBManager.php");
//Usamos una funcion de DBManager para comprobar el login
$man = new DBManager;
$man->connect();
if(!$man->tryLogin($_POST["username"],$_POST["pass"])){
  //caso negativo - Vamos a error
  echo "está todo mal";
}else{
  //caso positivo - Vamos al menu pricipal
  header("location:../MenuPrincipal.php");
}

?>
