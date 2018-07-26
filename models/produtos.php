<?php

class produtos extends model{

	public function listarProdutos($qt = 0){
		$sql = "SELECT * FROM produtos ORDER BY RAND() ";
		if($qt > 0){
			$sql .= "LIMIT ".$qt;		
		}

		$sql = $this->db->query($sql);

		$produtos = array();
		if($sql->rowCount() > 0){
			$produtos = $sql->fetchAll();
		}

		return $produtos;
	}

	public function listarCategoria($cat){
		$sql = "SELECT * FROM produtos WHERE id_categoria = '$cat' ";
		$sql = $this->db->query($sql);

		$produtos = array();
		if($sql->rowCount() > 0){
			$produtos = $sql->fetchAll();
		}
		return $produtos;
	}
}