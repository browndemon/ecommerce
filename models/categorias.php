<?php

class categorias extends model{

	public function getNome($id){
		$sql = "SELECT titulo FROM categorias WHERE id = '$id' ";
		$sql = $this->db->query($sql);

		$nome = '';
		if($sql->rowCount() > 0){
			$sql = $sql->fetch();
			$nome = $sql['titulo'];
		}

		return $nome;
	}
}