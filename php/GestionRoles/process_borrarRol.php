<?php
//Geteamos la id a borrar
$borrar = $_GET["id"];

//Conexion con base de datos

require_once("../DBManager.php");
$man = DBManager::getInstance(); //crea instancia
$man->connect(); //conectate a la bbdd

//Borramos
if($man->borrarRol($borrar)){
  echo "Borrado Correctamente";
}
else{
  echo "todo mal";
}
//Boton de volver
?>
<button onclick="location.href='../../GestionRoles/GestionRoles.php'">OK</button>
