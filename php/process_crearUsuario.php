<?php
/* Procesador de crear usuario (formato modelo)
 * Hecho por FVieira para interfaces de usuario ET1
 */
if($_POST['pass1']!=$_POST['pass2']){
  require_once("DBManager.php");
  $man = DBManager::getInstance(); //crea instancia
  $man->connect(); //conectate a la bbdd
  if($man->insertarPag($_POST['nombre'],$_POST['pass1'],$_POST['desc'],$_POST['email'])){//cambiar
    echo "Usuario creado correctamente";
    // redireccion a mensaje correcto aqui
  }else{
    echo "Error creando el usuario, ya existia un usuario con ese nombre";
    // redireccion a mensaje de error aqui
  }
}else {
  echo "Las contraseñas no coiciden";
  //redireccion a mensaje de error aqui
}

?>
