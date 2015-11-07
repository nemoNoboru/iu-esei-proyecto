 <?php
/* Cancerbero, clase que comprueba si un usuario puede o no entrar a una pagina
 * Esta dise~nada para servir de nexo de integracion entre el gestionador de permisos y la aplicacion en si.
 * FVieira, para el proyecto de interfaces de usuario
 */
 require_once("php/DBManager.php");
 class Cancerbero {

   public function Cancerbero($Pagename){
     if(!$this->man = DBManager::getInstance()){
       die("No se puede crear un DBManager");
     }else{
       if(!$this->man->connect()){
         die("No se puede conectar a la bd");
       }
     }
     $this->page = $Pagename;
   }

   public function canAccess($usuario){
     return $this->man->canUserInPag($usuario,$this->page);
   }

   public function canAccessPage($usuario,$pagina){
     return $this->man->canUserInPag($usuario,$pagina);
   }

   public function handleAuto(){
     if(!isset($_SESSION['name'])){
       return false;
     }
     if(!$this->canAccess($_SESSION['name'])){
       header('location:../views/error.php?ID=3');
       exit();
     }
   }

 }
