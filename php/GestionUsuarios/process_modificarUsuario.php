<?php

require_once("../DBManager.php");
$man = DBManager::getInstance(); //crea instancia
$man->connect(); //conectate a la bbdd

$man->ModificarUsuario($_POST['nombre'],$_POST['desc'],$_POST['email']);

$paginas = $man->listPags();
foreach ($paginas as $pag) {
  $man->deleteRelationUserPag($_POST['nombre'],$pag['pag_name']);
  if(isset($_POST[$pag['pag_name']])){
    if($man->insertRelationUserPag($_POST['nombre'],$pag['pag_name'])){
		$pagina_anterior=$_SERVER['HTTP_REFERER'];
		header('location: '.'../../views/correcto.php?ID=c2');
      //echo "relacion insertada correctamente<br>";
    }
    else{
		$pagina_anterior=$_SERVER['HTTP_REFERER'];
		header('location: '.'../../views/error.php?ID=e2');
      //echo 'error insertando la relación';
    }
  }
}
$roles = $man->listRols();
foreach ($roles as $rol) {
  $man->deleteRelationUserRol($_POST['nombre'],$rol['rol_name']);
  if(isset($_POST[$rol['rol_name']])){
    if($man->insertRelationUserRol($_POST['nombre'],$rol['rol_name'])){
		$pagina_anterior=$_SERVER['HTTP_REFERER'];
		header('location: '.'../../views/correcto.php?ID=c1');
     // echo "relacion insertada correctamente<br>";
    }else{
		$pagina_anterior=$_SERVER['HTTP_REFERER'];
		header('location: '.'../../views/error.php?ID=e1');
		//echo 'error insertando la relación';
    }
  }
}
$funcionalidades = $man->listFuns();
foreach ($funcionalidades as $fun) {
  $man->deleteRelationUserFun($_POST['nombre'],$fun['fun_name']);
  if(isset($_POST[$fun['fun_name']])){
    if($man->insertRelationUserFun($_POST['nombre'],$fun['fun_name'])){
		$pagina_anterior=$_SERVER['HTTP_REFERER'];
		header('location: '.'../../views/correcto.php?ID=c3');
      //echo "relacion insertada correctamente<br>";
    }
    else{
		$pagina_anterior=$_SERVER['HTTP_REFERER'];
		header('location: '.'../../views/error.php?ID=e3');
      //echo 'error insertando la relación';
    }
  }
}
header('location:../../GestionUsuarios/GestionUsuarios.php');
?>
