<?php
//Geteamos la id a borrar
$borrar = $_GET["id"];

//Conexion con base de datos

require_once("../DBManager.php");
$man = DBManager::getInstance(); //crea instancia
$man->connect(); //conectate a la bbdd

//Borramos
if($man->borrarFuncionalidad($delete_id)){
  echo "Borrado Correctamente";
}
else{
  echo "todo mal";
}
//Boton de volver
?>
<button onclick="location.href='../../GestionFuncionalidades/GestionFuncionalidades.php'">OK</button>
