<?php
/* Clase destinada a crear tablas dinamicamente dados arrays de mysql
 * Creada por FVieira para el proyecto de interfaces de usuario
 */
 require_once("../php/DBManager.php");
 require_once("getIdioma.php");
 $Idioma = getIdioma();

 class RenderTable {
   public function renderTable(){
     $this->man = DBManager::getInstance();
     $this->man->connect();
   }

   private function echoInit($nameTable){
     global $Idioma;
     echo  '<table class="table table-striped">';
     echo  '<thead><tr><th>'.$Idioma[$nameTable].'</th><th class="text-right">'.$Idioma['permitir'].'</th></tr></thead>';
     echo  '<tbody>';
   }
   private function echoFin(){
     echo '</tbody>';
     echo '</table>';
   }
   private function echoline($name){
     echo "<tr><td>".$name."</td><td class='text-right' ><input type='checkbox' name='".$name."'/></td></tr>";
   }
   private function echoMarkedLine($name){
     echo "<tr><td>".$name."</td><td class='text-right' ><input type='checkbox' checked name='".$name."'/></td></tr>";
   }
   private function complexTable($all,$relation){
     foreach ($all as $allItem) {
       $marked = false;
       if(is_array($relation)){
         foreach ($relation as $itemRelation) {
           if(reset($itemRelation)==reset($allItem)){
             $marked = true;
           }
         }
       }
       if($marked){
         $this->echoMarkedLine(reset($allItem));
       }else{
         $this->echoline(reset($allItem));
       }
     }
   }
   public function tableBlankUsuario(){
     $this->echoInit("Usuario");
     $result = $this->man->listUsers();
     foreach ($result as $item) {
       $this->echoline($item['user_name']);
     }
     $this->echoFin();
   }
   public function tableBlankRol(){
     $this->echoInit("Rol");
     $result = $this->man->listRols();
     foreach ($result as $item) {
       $this->echoline($item['rol_name']);
     }
     $this->echoFin();
   }
   public function tableBlankPagina(){
     $this->echoInit("Página");
     $result = $this->man->listPags();
     foreach ($result as $item) {
       $this->echoline($item['pag_name']);
     }
     $this->echoFin();
   }
   public function tableBlankFuncionalidad(){
     $this->echoInit("Funcionalidad");
     $result = $this->man->listFuns();
     foreach ($result as $item) {
       $this->echoline($item['fun_name']);
     }
     $this->echoFin();
   }
   public function tableRolByUser($user){
     $relations = $this->man->listRolesByUser($user);
     $all = $this->man->listRols();
     $this->echoInit("Rol");
     $this->complexTable($all,$relations);
     $this->echoFin();
   }
   public function tableRolByFun($fun){
     $relations = $this->man->listRolesByFun($fun);
     $all = $this->man->listRols();
     $this->echoInit("Rol");
     $this->complexTable($all,$relations);
     $this->echoFin();
   }
   public function tableUserByPag($pag){
     $relations = $this->man->listUsersByPag($pag);
     $all = $this->man->listUsers();
     $this->echoInit("Usuario");
     $this->complexTable($all,$relations);
     $this->echoFin();
   }
   public function tableUserByRol($rol){
     $relations = $this->man->listUsersByRol($rol);
     $all = $this->man->listUsers();
     $this->echoInit("Usuario");
     $this->complexTable($all,$relations);
     $this->echoFin();
   }
   public function tableUserByFun($fun){
     $relations = $this->man->listUsersByFun($fun);
     $all = $this->man->listUsers();
     $this->echoInit("Usuario");
     $this->complexTable($all,$relations);
     $this->echoFin();
   }
   public function tablePagByUser($user){
     $relations = $this->man->listPagsByUsers($user);
     $all = $this->man->listPags();
     $this->echoInit("Páginas");
     $this->complexTable($all,$relations);
     $this->echoFin();
   }
   public function tablePagByFun($fun){
     $relations = $this->man->listPagsByFun($fun);
     $all = $this->man->listPags();
     $this->echoInit("Páginas");
     $this->complexTable($all,$relations);
     $this->echoFin();
   }
   public function tableFunByRol($rol){
    $relations = $this->man->listFunsByRol($rol);
    $all = $this->man->listFuns();
    $this->echoInit("Funcionalidad");
    $this->complexTable($all,$relations);
    $this->echoFin();
   }
   public function tableFunByPags($pag){
    $relations = $this->man->listFunsByPag($pag);
    $all = $this->man->listFuns();
    $this->echoInit("Funcionalidad");
    $this->complexTable($all,$relations);
    $this->echoFin();
   }
 }
