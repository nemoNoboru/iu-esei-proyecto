<?php

require_once("../DBManager.php");
$man = DBManager::getInstance(); //crea instancia
$man->connect(); //conectate a la bbdd

$paginas = $man->listPags();
foreach ($paginas as $pag) {
  if(isset($_POST[$pag['pag_name']])){
    if($man->insertRelationPagFun($pag['pag_name'],$_POST['nombre'])){
      echo "relacion insertada correctamente<br>";
    }
    else{
      echo 'la relación ta existía';
    }
  }
  else{
    $man->deleteRelationPagFun($pag['pag_name'],$_POST['nombre']);
  }
}
$roles = $man->listRols();
foreach ($roles as $rol) {
  if(isset($_POST[$rol['rol_name']])){
    if($man->insertRelationRolFun($rol['rol_name'],$_POST['nombre'])){
      echo "relacion insertada correctamente<br>";
    }else{
      echo 'la relación ta existía';
    }
  }
  else{
    $man->deleteRelationRolFun($rol['rol_name'],$_POST['nombre']);
  }
}
$usuarios = $man->listUsers();
foreach ($usuarios as $user) {
  if(isset($_POST[$user['user_name']])){
    if($man->insertRelationUserFun($user['user_name'],$_POST['nombre'])){
      echo "relacion insertada correctamente<br>";
    }else{
      echo 'La relación ya existía';
    }
  }
  else{
    $man->deleteRelationUserFun($user['user_name'],$_POST['nombre']);
  }
}

 ?>
<button onclick="location.href='../../GestionFuncionalidades/GestionFuncionalidades.php'">OK</button>
