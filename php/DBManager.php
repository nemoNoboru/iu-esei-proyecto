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
  private function doQuery($query){ // funcion para manejar errores en queries
    $result = $this->db->query($query);
    if(!$result){
      die("Error en la query: ".$this->db->error); // perdona a este pecador, dios de la programacion
    }
    return $result;
  }
  public function existeFun($name){
    $toQuery = "select * from Funcionalidad where fun_name = '".$name."'";
    $result = $this->doQuery($toQuery);
    if($result->num_rows==0){
      return false;
    }
    return true;
  }
  public function existePag($name){
    $toQuery = "select * from Pagina where pag_name = '".$name."'";
    $result = $this->doQuery($toQuery);
    if($result->num_rows==0){
      return false;
    }
    return true;
  }
  public function existeRol($name){
    $toQuery = "select * from Rol where rol_name = '".$name."'";
    $result = $this->doQuery($toQuery);
    if($result->num_rows==0){
      return false;
    }
    return true;
  }
  public function existeUser($name){
    $toQuery = "select * from Usuario where user_name = '".$name."'";
    $result = $this->doQuery($toQuery);
    if($result->num_rows==0){
      return false;
    }
    return true;
  }
  public function insertarFun($name,$desc){
    if(!$this->existeFun($name)){
      $toQuery = "insert into Funcionalidad (fun_name,fun_desc) values ('".$name."','".$desc."');";
      $this->doQuery($toQuery); // si no DIE es que todo fue bien. (en determinado momento podriamos hacer algo mejor)
      return true;
    }
    return false;
  }
  public function insertarPag($name,$desc){
    if(!$this->existePag($name)){
      $toQuery = "insert into Pagina (pag_name,pag_desc) values ('".$name."','".$desc."');";
      $this->doQuery($toQuery); // si no DIE es que todo fue bien. (en determinado momento podriamos hacer algo mejor)
      return true;
    }
    return false;
  }
  public function insertarRol($name,$desc){
    if(!$this->existeRol($name)){
      $toQuery = "insert into Rol (rol_name,rol_desc) values ('".$name."','".$desc."');";
      $this->doQuery($toQuery); // si no DIE es que todo fue bien. (en determinado momento podriamos hacer algo mejor)
      return true;
    }
    return false;
  }
  public function insertarUser($name,$pass,$desc,$email){
    if(!$this->existeUser($name)){
      $toQuery = "insert into Usuario (user_name,user_pass,user_desc,user_email) values ('".$name."','".$pass."','".$desc."','".$email."');";
      $this->doQuery($toQuery); // si no DIE es que todo fue bien. (en determinado momento podriamos hacer algo mejor)
      return true;
    }
    return false;
  }
  public function listRolesByUser($user){
    $toQuery = "select rol_name
                from Usuario , Rol , User_Rol
                where Usuario.user_name = '".$user."' and
                      Usuario.user_id = User_Rol.user_id and
                      User_Rol.rol_id = Rol.rol_id";
    $result = $this->doQuery($toQuery);
    return $result->fetch_array();
  }
  public function listRolesByFun($fun){
    $toQuery = "select rol_name
                from Funcionalidad , Rol , Rol_Fun
                where Funcionalidad.fun_name = '".$fun."' and
                      Funcionalidad.fun_id = Rol_Fun.fun_id and
                      Rol_Fun.rol_id = Rol.rol_id";
    $result = $this->doQuery($toQuery);
    return $result->fetch_array();
  }
  public function listUsersByRol($rol){
    $toQuery = "select user_name
                from Usuario , Rol , User_Rol
                where rol_name = '".$rol."' and
                      Rol.rol_id = User_Rol.rol_id and
                      User_Rol.user_id = Usuario.user_id";
    $result = $this->doQuery($toQuery);
    return $result->fetch_array();
  }
  public function listUsersByPag($pag){
    $toQuery = "select user_name
                from Usuario , Pagina , Pag_Fun
                where pag_name = '".$pag."' and
                      Pagina.pag_id = Pag_Fun.pag_id and
                      Pag_Fun.user_id = Usuario.user_id";
    $result = $this->doQuery($toQuery);
    return $result->fetch_array();
  }
}
?>
