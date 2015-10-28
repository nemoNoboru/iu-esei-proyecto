
<?php
/* Clase que crea combobox
* Autor: Nara
*/
require_once ("../php/DBManager.php");
require_once ("getIdioma.php");
class renderCombobox {
	public function renderComboboxUsuario(){
		$this->man = DBManager::getInstance();
		$this->man->connect();
	}

	private function echoInit($nameLista){
		//global $idioma;
		//echo <'<div id="contenido cntenido-striped">';
		echo  '<select class = "form-control">';
	}

	private function echoFin(){
		echo '</select>';
	}

	private function echoline($name,$id){
		echo '<option><a href="modificarRol.php?id='.$id.'"'.$name.'</option>';
		echo '<option><a href="modificarFuncionalidad.php?id='.$id.'"'.$name.'</option>';
		echo '<option><a href="modificarPagina.php?id='.$id.'"'.$name.'</option>';
		echo '<option><a href="modificarUsuario.php?id='.$id.'"'.$name.'</option>';

	}

   public function comboboxBlankRol(){
     $this->echoInit("Rol");
     $result = $this->man->listRols();
     foreach ($result as $item) {
		$id = $this->man->getIdRol($item['rol_name']);
       $this->echoline($item['rol_name']);
     }
     $this->echoFin();
   }
   public function comboboxBlankUsuario(){
     $this->echoInit("Usuario");
     $result = $this->man->listUsers();
     foreach ($result as $item) {
			 $id = $this->man->getIdUsuario($item['user_name']);
       $this->echoline($item['user_name']);
     }
     $this->echoFin();
   }
	 public function comboboxBlankPagina(){
		$this->echoInit("Página");
		$result = $this->man->listPags();
		foreach ($result as $item) {
			$id = $this->man->getIdPagina($item['pag_name']);
			$this->echoline($item['pag_name']);
		}
		$this->echoFin();
	}
	public function comboboxBlankFuncionalidad(){
		$this->echoInit("Funcionalidad");
		$result = $this->man->listFuns();
		foreach ($result as $item) {
			$id = $this->man->getIdFuncionalidad($item['fun_name']);
			$this->echoline($item['fun_name']);
		}
		$this->echoFin();
	}
}
