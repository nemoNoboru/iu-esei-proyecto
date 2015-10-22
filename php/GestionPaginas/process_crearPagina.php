<?php
/* Procesador de crear pagina (formato modelo)
 * Hecho por FVieira para interfaces de usuario ET1
 */

require_once("DBManager.php");
$man = DBManager::getInstance(); //crea instancia
$man->connect(); //conectate a la bbdd

$funcionalidades = $man->listFuns();
foreach ($funcionalidades as $fun) {
  if(isset($_POST[$fun['fun_name']])){
    if($man->insertRelationPagFun($_POST['nombre'],$fun['fun_name'])){
      echo "relacion insertada correctamente";
    }else{
      echo "error insertando la relacion";
    }
  }
}
$usuarios = $man->listUsers();
foreach ($usuarios as $user) {
  if(isset($_POST[$user['user_name']])){
    if($man->insertRelationUserPag($user['user_name'],$_POST['nombre'])){
      echo "relacion insertada correctamente";
    }else{
      echo "error insertando la relacion";
    }
  }
}
if($man->insertarPag($_POST['nombre'],$_POST['desc'])){
  echo "Pagina creada correctamente";
  // redireccion a mensaje correcto aqui
}else{
  echo "Error creado la pagina, ya existia una pagina con ese nombre";
  // redireccion a mensaje de error aqui
}

?>
