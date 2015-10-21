<?php
/* Clase destinada a crear tablas dinámicas para las paginas de GestionUsuarios
 * Creada por MVTorres
 */
require_once("../php/DBManager.php");


class RenderTableGestion {
  public function RenderTableGestion(){
    $man = DBManager::getInstance(); //crea instancia
    $man->connect(); //conectate a la bbdd
  }
//Privates para uso interno
  private function echoInit($arrayNames){
    echo '<div class="tabla">';
    echo   '<table>';
      //Construyendo la linea
    echo '<tr>';
    foreach($arrayNames as $header){
      echo '<th>'.$header.'</th>';
    }
    echo '</tr>';
  }
  private function echoFin(){
    echo '</table>';
    echo '</div>';
  }
  private function echoline($tupla){
    echo "<tr>";
    foreach($tupla as $campo){
    echo "<td>".$campo."</td>";
    }
    echo "</tr>";
  }
//Publics para paginas de Gestion
  public function tableRol(){
    $this->echoInit($arrayNames=array("Nombre","Descripcion","Eliminar"));
    //$result = $this->man->listUsers();
    //foreach ($result as $item) {
    //  $this->echoline($item);
    //}
    $this->echoFin();
  }




}





?>
