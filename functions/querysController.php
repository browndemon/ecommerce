<?php
class Querys extends controller{

	public function listCatego(){
		$sql = "SELECT * FROM categorias";
		$sql = $this->db->query($sql);

		$array = array();
		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}
		return $array;
	}
}