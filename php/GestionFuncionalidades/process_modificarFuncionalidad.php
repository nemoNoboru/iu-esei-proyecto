<?php

require_once("../DBManager.php");
$man = DBManager::getInstance(); //crea instancia
$man->connect(); //conectate a la bbdd

$man->ModificarFuncionalidad($_POST['nombre'],$_POST['desc']);

$paginas = $man->listPags();
foreach ($paginas as $pag) {
  $man->deleteRelationPagFun($pag['pag_name'],$_POST['nombre']);
  if(isset($_POST[$pag['pag_name']])){
    if($man->insertRelationPagFun($pag['pag_name'],$_POST['nombre'])){
      echo "relacion insertada correctamente<br>";
    }
    else{
      echo 'error insertando la relación';
    }
  }
}
$roles = $man->listRols();
foreach ($roles as $rol) {
  $man->deleteRelationRolFun($rol['rol_name'],$_POST['nombre']);
  if(isset($_POST[$rol['rol_name']])){
    if($man->insertRelationRolFun($rol['rol_name'],$_POST['nombre'])){
      echo "relacion insertada correctamente<br>";
    }else{
      echo 'error insertando la relación';
    }
  }
}
$usuarios = $man->listUsers();
foreach ($usuarios as $user) {
  $man->deleteRelationUserFun($user['user_name'],$_POST['nombre']);
  if(isset($_POST[$user['user_name']])){
    if($man->insertRelationUserFun($user['user_name'],$_POST['nombre'])){
      echo "relacion insertada correctamente<br>";
    }else{
      echo 'error insertando la relación';
    }
  }
}
header('location:../../GestionFuncionalidades/GestionFuncionalidades.php');
?>
