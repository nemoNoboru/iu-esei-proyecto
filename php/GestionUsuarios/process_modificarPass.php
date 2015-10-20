<?php
/* Procesador de modificar contraseña
 * Todavía no está acabado, la funcion en DBManager debe ser creada
 */

require_once("DBManager.php");
$man = DBManager::getInstance(); //crea instancia
$man->connect(); //conectate a la bbdd
if($man->updatePass($_POST['pass1'],$_POST['pass2'])){
  echo "Contraseña cambiada correctamente"
  // redireccion a mensaje correcto aqui
}else{
  echo "Error durante el cambio de contraseña";
  // redireccion a mensaje de error aqui
}

?>
