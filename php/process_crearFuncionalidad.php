<?php
/* Procesador de crear funcionalidad (formato modelo)
 * Hecho por FVieira para interfaces de usuario ET1
 */

require_once("DBManager.php");
$man = new DBManager; //crea instancia
$man->connect(); //conectate a la bbdd
if($man->insertarfun($_POST['nombre'],$_POST['desc'])){
  echo "funcionalidad creada correctamente";
  // redireccion a mensaje correcto aqui
}else{
  echo "Error creado la funcionalidad, ya existia una funcionalidad con ese nombre";
  // redireccion a mensaje de error aqui
}

?>
