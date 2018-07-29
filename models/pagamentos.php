<?php 
class pagamentos extends model{

	public function get_pagamentos(){
		$array = array();
		$sql = "SELECT * FROM pagamentos";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}
}