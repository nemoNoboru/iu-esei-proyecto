<?php
/* Procesador de crear usuario (formato modelo)
 * Hecho por FVieira para interfaces de usuario ET1
 */
if($_POST['pass1']==$_POST['pass2']){	//NECESITA CAMBIARSE PARA USAR JAVASCRIPT					//Se comprueba que las contraseñas introducidas son iguales
  require_once("../DBManager.php");																	//Se incluye la clase que gestiona la DB
  $man = DBManager::getInstance();																	//Se creaa un objeto de la calse DBManager, si ya hay alguno creado solo se devuelve el que ya hay.
  $man->connect(); 																					//Se conecta con la BD
  if($man->insertarUser($_POST['nombre'],$_POST['pass1'],$_POST['desc'],$_POST['email'])){			//Si se inserta el usuario en la base de datos correctamente
  
    //Se insertan las relaciones usuario-rol
	$roles = $man->listRols();																			//Se obtiene la lista de roles
    foreach ($roles as $rol) {																			//Se recorren todos los roles
      if(isset($_POST[$rol['rol_name']])){																//Si el rol actual esta entre los roles que se han enviado en el formulario
        if($man->insertRelationUserRol($_POST['nombre'],$rol['rol_name'])){									//Si se inserta en la DB la relacion usuario-rolActual correctamente
          echo "relacion insertada correctamente";																//Mensaje de exito
        }else{																								//Si no
          echo "error insertando la relacion";																	//Mensaje de error
        }
      }
    }
	
	//Se insertan las relaciones usuario-pagina
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
	
	//Se insertan las relaciones usuario-funcionalidad
    $funcionalidades = $man->listFuns();
    foreach ($funcionalidades as $fun) {
      if(isset($_POST[$fun['fun_name']])){
        if($man->insertRelationUserFun$_POST['nombre'],$fun['fun_name'])){
          echo "relacion insertada correctamente";
        }else{
          echo "error insertando la relacion";
        }
      }
    }
    echo "Usuario creado correctamente";																//Mensaje de exito
    // redireccion a mensaje correcto aqui
  }else{																							//Si no se pudo insertar el usuario
    echo "Error creando el usuario, ya existia un usuario con ese nombre";								//Mensaje de error
    // redireccion a mensaje de error aqui
  }
}else {																							//Si no coinciden las contraseñas del formulario
  echo "Las contraseñas no coiciden";																//Mensaje de error
  //redireccion a mensaje de error aqui
}

?>
<button onclick="location.href='../../GestionUsuarios/GestionUsuarios.php'">OK</button>			<!--Boton de OK que te devuelve a la gestion de usuarios-->
