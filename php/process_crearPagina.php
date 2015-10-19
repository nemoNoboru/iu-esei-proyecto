<?php
/* Procesador de crear pagina (formato modelo)
 * Hecho por FVieira para interfaces de usuario ET1
 */

require_once("DBManager.php");
$man = DBManager::getInstance(); //crea instancia
$man->connect(); //conectate a la bbdd
if($man->insertarPag($_POST['nombre'],$_POST['desc'])){
  echo "Pagina creada correctamente";
  // redireccion a mensaje correcto aqui
}else{
  echo "Error creado la pagina, ya existia una pagina con ese nombre";
  // redireccion a mensaje de error aqui
}

?>
