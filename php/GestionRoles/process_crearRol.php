<?php
/* Procesador de crear Rol (formato modelo)
 * Hecho por FVieira para interfaces de usuario ET1
 */

require_once("../DBManager.php");
$man = DBManager::getInstance(); //crea instancia
$man->connect(); //conectate a la bbdd

if($man->insertarRol($_POST['nombre'],$_POST['desc'])){
  echo "Pagina creada correctamente";
  // redireccion a mensaje correcto aqui
}else{
  echo "Error creado el rol, ya existia un rol con ese nombre";
  // redireccion a mensaje de error aqui
}

$usuarios = $man->listUsers();
foreach ($usuarios as $user) {
  if(isset($_POST[$user['user_name']])){
    if($man->insertRelationUserRol($user['user_name'],$_POST['nombre'])){
      echo "relacion insertada correctamente";
    }else{
      echo "error insertando la relacion";
    }
  }
}

$funcionalidades = $man->listFuns();
foreach ($funcionalidades as $fun) {
  if(isset($_POST[$fun['fun_name']])){
    if($man->insertRelationRolFun($_POST['nombre'],$fun['fun_name'])){
      echo "relacion insertada correctamente";
    }else{
      echo "error insertando la relacion";
    }
  }
}

?>
