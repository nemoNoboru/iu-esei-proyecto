<?php
/* Procesador de crear usuario (formato modelo)
 * Hecho por FVieira para interfaces de usuario ET1
 */
if($_POST['pass1']==$_POST['pass2']){
  require_once("../DBManager.php");
  $man = DBManager::getInstance(); //crea instancia
  $man->connect(); //conectate a la bbdd
  if($man->insertarUser($_POST['nombre'],$_POST['pass1'],$_POST['desc'],$_POST['email'])){//cambiar
    $roles = $man->listRols();
    foreach ($roles as $rol) {
      if(isset($_POST[$rol['rol_name']])){
        if($man->insertRelationUserRol($_POST['nombre'],$rol['rol_name'])){
          echo "relacion insertada correctamente";
        }else{
          echo "error insertando la relacion";
        }
      }
    }
    $paginas = $man->listPags();
    foreach ($paginas as $pag) {
      if(isset($_POST[$pag['pag_name']])){
        if($man->insertRelationUserPag($_POST['nombre'],$pag['pag_name'])){
          echo "relacion insertada correctamente";
        }else{
          echo "error insertando la relacion";
        }
      }
    }
    $funcionalidades = $man->listFuns();
    foreach ($funcionalidades as $fun) {
      if(isset($_POST[$fun['fun_name']])){
        if($man->insertRelationUserRol($_POST['nombre'],$fun['fun_name'])){
          echo "relacion insertada correctamente";
        }else{
          echo "error insertando la relacion";
        }
      }
    }
    echo "Usuario creado correctamente";
	$pagina_anterior=$_SERVER['HTTP_REFERER'];
	header('location: '.'../../views/correcto.php?ID=UC');
    // redireccion a mensaje correcto aqui
  }else{
    echo "Error creando el usuario, ya existia un usuario con ese nombre";
	$pagina_anterior=$_SERVER['HTTP_REFERER'];
	header('location: '.'../../views/error.php?ID=1'); 
    // redireccion a mensaje de error aqui
  }
}else {
  echo "Las contraseñas no coiciden";
  $pagina_anterior=$_SERVER['HTTP_REFERER'];
	header('location: '.'../../views/error.php?ID=2');
  //redireccion a mensaje de error aqui
}

?>
<!--<button onclick="location.href='../../GestionUsuarios/CrearUsuario.php'">OK</button>-->
