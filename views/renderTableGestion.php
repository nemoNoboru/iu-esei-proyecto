<?php
/* Clase destinada a crear tablas dinámicas para las paginas de GestionUsuarios
 * Creada por MVTorres
 */
require_once("../php/DBManager.php");


class RenderTableGestion {
  public function renderTableGestion(){
    $this->man = DBManager::getInstance(); //crea instancia
    $this->man->connect(); //conectate a la bbdd
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
    echo "<td><button>X</button></td>";
    echo "</tr>";
  }

//Publics para paginas de Gestion
  public function tableRol(){
    $this->echoInit($arrayNames=array("Rol","Descripcion","Eliminar"));
    $result = $this->man->listGestionRols();
    foreach ($result as $tupla) {
      $this->echoline($tupla);
    }
    $this->echoFin();
  }
  public function tableFuncionalidad(){
    $this->echoInit($arrayNames=array("Funcionalidad","Descripcion","Eliminar"));
    $result = $this->man->listGestionFuns();
    foreach ($result as $tupla) {
      $this->echoline($tupla);
    }
    $this->echoFin();
  }
  public function tableUsuario(){
    $this->echoInit($arrayNames=array("Usuario","ID","Email","Eliminar"));
    $result = $this->man->listGestionUsers();
    foreach ($result as $tupla) {
      $this->echoline($tupla);
    }
    $this->echoFin();
  }
  public function tablePagina(){
    $this->echoInit($arrayNames=array("Página","Descripcion","Eliminar"));
    $result = $this->man->listGestionPags();
    foreach ($result as $tupla) {
      $this->echoline($tupla);
    }
    $this->echoFin();
  }

}





?>
