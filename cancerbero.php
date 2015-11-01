 <?php
/* Cancerbero, clase que comprueba si un usuario puede o no entrar a una pagina
 * Esta dise~nada para servir de nexo de integracion entre el gestionador de permisos y la aplicacion en si.
 * FVieira, para el proyecto de interfaces de usuario
 */
 require_once("php/DBManager.php");
 class Cancerbero {

   public function Cancerbero($Pagename){
     if($this->man = DBManager::getInstance() == false ){
       die("No se puede crear un DBManager");
     }else{
       if($this->man->connect() == false){
         die("No se puede conectar a la bd");
       }
     }
     $this->page = $Pagename;
   }

   public function canAccess($usuario){
     return $this->man->canUserInPag($usuario,$this->page);
   }

 }
