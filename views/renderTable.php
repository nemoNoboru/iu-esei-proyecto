<?php
/* Clase destinada a crear tablas dinamicamente dados arrays de mysql
 * Creada por FVieira para el proyecto de interfaces de usuario
 */
 require_once("../php/DBManager.php");

 class RenderTable {
   public function renderTable(){
     $this->man = DBManager::getInstance();
     $this->man->connect();
   }

   private function echoInit($nameTable){
     echo '<div class="tabla">';
     echo   '<table>';
     echo '<tr><th>'.$nameTable.'</th><th>Permitir</th></tr>';
   }
   private function echoFin(){
     echo '</table>';
     echo '</div>';
   }
   private function echoline($name){
     echo "<tr><td>".$name."</td><td><input type='checkbox' name='".$name."'/></td></tr>";
   }
   private function echoMarkedLine($name){
     echo "<tr><td>".$name."</td><td><input type='checkbox' checked name='".$name."'/></td></tr>";
   }
   private function complexTable($all,$relation){
     foreach ($all as $allItem) {
       $marked = false;
       if(is_array($relation)){
         foreach ($relation as $itemRelation) {
           if($itemRelation==$allItem){
             $marked = true;
           }
         }
       }
       if($marked){
         $this->echoMarkedLine($allItem);
       }else{
         $this->echoline($allItem);
       }
     }
   }
   public function tableBlankUsuario(){
     $this->echoInit("Usuario");
     $result = $this->man->listUsers();
     foreach ($result as $item) {
       $this->echoline($item);
     }
     $this->echoFin();
   }
   public function tableBlankRol(){
     $this->echoInit("Rol");
     $result = $this->man->listRols();
     foreach ($result as $item) {
       $this->echoline($item);
     }
     $this->echoFin();
   }
   public function tableBlankPagina(){
     $this->echoInit("Pagina");
     $result = $this->man->listPags();
     foreach ($result as $item) {
       $this->echoline($item);
     }
     $this->echoFin();
   }
   public function tableBlankFuncionalidad(){
     $this->echoInit("Funcionalidad");
     $result = $this->man->listFuns();
     foreach ($result as $item) {
       $this->echoline($item);
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
 }
