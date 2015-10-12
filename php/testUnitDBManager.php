 <?php
/* Test unit para comprobar los metodos de la clase DBManager
 * Puede generar un monton de usuarios dummys que deberan de ser eliminados en su dia
 * Felipe Vieira
 */
  require "DBManager.php";
  $man = new DBManager;

  function say_error($correct){
    if($correct){
      echo "creacion realizada correctamente<br/>";
    }else{
      echo "Ya existia un dato asi en la base de datos<br/>";
    }
  }

  if($man->connect()){
    say_error($man->insertarRol("rolDummy1","rol de test unit"));
    say_error($man->insertarFun("funDummy1","funcion de test unit"));
    say_error($man->insertarPag("pagDummy1","pagina de test unit"));
    say_error($man->insertarUser("userDummy1","12345","usuario de test unit","dummy@dummy"));

    say_error($man->insertarRol("rolDummy2","rol de test unit"));
    say_error($man->insertarFun("funDummy2","funcion de test unit"));
    say_error($man->insertarPag("pagDummy2","pagina de test unit"));
    say_error($man->insertarUser("userDummy2","12345","usuario de test unit","dummy@dummy"));
  }
?>
