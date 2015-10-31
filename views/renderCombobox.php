
<?php
/* Clase que crea combobox
* Autor: Nara
*/
require_once ("../php/DBManager.php");
require_once ("getIdioma.php");
class renderCombobox {
	public function renderCombobox(){
		$this->man = DBManager::getInstance();
		$this->man->connect();
	}

	private function echoInit($nameLista){
		//global $idioma;
		//echo <'<div id="contenido cntenido-striped">';
		echo  '<select name="forma" onchange="location = this.options[this.selectedIndex].value;" class = "form-control">';
		echo "<option selected >---Seleccionar---</option>";
	}

	private function echoFin(){
		echo '</select>';
	}

	private function echolineRol($name,$id){
		echo '<option><a href="ModificarRol.php?id='.$id.'"'.$name.'</option>';
	}
	private function echolineFun($name,$id){
		echo '<option><a href="ModificarFuncionalidad.php?id="'.$id.'"">'.$name.'</a></option>';
	}
	private function echolinePagina($name,$id){
		echo '<option><a href="ModificarPagina.php?id='.$id.'"'.$name.'</option>';
	}
	private function echolineUsuario($name,$id){
		echo '<option value="ModificarUsuario.php?id='.$id.'">'.$name.'</a></option>';
	}

   public function comboboxBlankRol(){
     $this->echoInit("Rol");
     $result = $this->man->listRols();
     foreach ($result as $item) {
		$id = $this->man->getIdRol($item['rol_name']);
       $this->echolineRol($item['rol_name'],$id);
     }
     $this->echoFin();
   }
   public function comboboxBlankUsuario(){
     $this->echoInit("Usuario");
     $result = $this->man->listUsers();
     foreach ($result as $item) {
			 $id = $this->man->getIdUser($item['user_name']);
       $this->echolineUsuario($item['user_name'],$id);
     }
     $this->echoFin();
   }
	 public function comboboxBlankPagina(){
		$this->echoInit("Página");
		$result = $this->man->listPags();
		foreach ($result as $item) {
			$id = $this->man->getIdPagina($item['pag_name']);
			$this->echolinePagina($item['pag_name'],$id);
		}
		$this->echoFin();
	}
	public function comboboxBlankFuncionalidad(){
		$this->echoInit("Funcionalidad");
		$result = $this->man->listFuns();
		foreach ($result as $item) {
			$id = $this->man->getIdFun($item['fun_name']);
			$this->echolineFun($item['fun_name'],$id);
		}
		$this->echoFin();
	}
}
