<?php
/*
 *  Clase destinada a manejar cualquier interaccion con la base de datos
 *  Creada por Felipe Vieira para el proyecto de interfaces de usuario
 */
class DBManager {
  public function connect(){ // se conecta a la base de datos
    $this->db = new mysqli('localhost','AdminGSTR','AdminPass','GSTRDB');
    if ($this->db->connect_errno) {
        die("Failed to connect to MySQL: " . $this->db->connect_error);
        return false;
    }
    return true;
  }
  private function doQuery($db,$query){ // funcion para manejar errores en queries
    $result = $db->query($query);
    if(!$result){
      die("Error en la query: ".$db->error); // perdona a este pecador, dios de la programacion
    }
    return $result;
  }
  public function existeFun($name){
    $toQuery = "select * from Funcionalidad where fun_name = ".$name;
    $result = doQuery($this->db,$toQuery);
    if($result->num_rows==0){
      return false;
    }
    return true;
  }
  public function existePag($name){
    $toQuery = "select * from Pagina where pag_name = ".$name;
    $result = doQuery($this->db,$toQuery);
    if($result->num_rows==0){
      return false;
    }
    return true;
  }
  public function existeRol($name){
    $toQuery = "select * from Rol where rol_name = ".$name;
    $result = doQuery($this->db,$toQuery);
    if($result->num_rows==0){
      return false;
    }
    return true;
  }
  public function existeUser($name){
    $toQuery = "select * from Usuario where user_name = ".$name;
    $result = doQuery($this->db,$toQuery);
    if($result->num_rows==0){
      return false;
    }
    return true;
  }
  public function insertarFun($name,$desc){
    if(!existeFun($name)){
      $toQuery = "insert into Funcionalidad (fun_name,fun_desc) values ('".$name."','".$desc."');";
      doQuery($this->db,$toQuery); // si no DIE es que todo fue bien. (en determinado momento podriamos hacer algo mejor)
      return true;
    }
    return false;
  }
  public function insertarPag($name,$desc){
    if(!existePag($name)){
      $toQuery = "insert into Pagina (pag_name,pag_desc) values ('".$name."','".$desc."');";
      doQuery($this->db,$toQuery); // si no DIE es que todo fue bien. (en determinado momento podriamos hacer algo mejor)
      return true;
    }
    return false;
  }
  public function insertarRol($name,$desc){
    if(!existeRol($name)){
      $toQuery = "insert into Rol (rol_name,rol_desc) values ('".$name."','".$desc."');";
      doQuery($this->db,$toQuery); // si no DIE es que todo fue bien. (en determinado momento podriamos hacer algo mejor)
      return true;
    }
    return false;
  }
  public function insertarUser($name,$pass,$desc,$email){
    if(!existeUser($name)){
      $toQuery = "insert into Usuario (user_name,user_pass,user_desc,user_email) values ('".$name."','".$pass."','".$desc."','".$email."');";
      doQuery($this->db,$toQuery); // si no DIE es que todo fue bien. (en determinado momento podriamos hacer algo mejor)
      return true;
    }
    return false;
  }
  public function listRolesByUser($rol,$user){
    $toQuery = "select rol_name from User , Rol"
  }
}
?>
