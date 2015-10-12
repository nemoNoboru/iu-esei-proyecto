/* Test unit para comprobar los metodos de la clase DBManager
 * Puede generar un monton de usuarios dummys que deberan de ser eliminados en su dia
 * Felipe Vieira
 */
 <?php
  require "DBManager.php"
  $man = new DBManager;
  if($man->connect()){
    
  }
