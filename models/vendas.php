<?php

class vendas extends model{

	public function setVenda($uid, $endereco, $valor, $pg, $prods){
		/*
		1 => Aguardando Pgto
		2 => Aprovado
		3 => Cancelado
		*/
		$status = '1';
		$link = '';

		if($pg == '1'){
			$satus = '2';
			$link = 'sistemas/loja1/carrinho/obrigado';
		}else{
			// Integração com Pagamentos...

		}

		$sql = "INSERT INTO vendas SET id_usuario = '$uid', endereco = '$endereco', valor = '$valor', forma_pg = '$pg' status_pg = '$status', pg_link = '$link' ";
		$this->db->query($sql);

		$id_venda = $this->db->lastInsertId();

		foreach($prods as $prod){
			$sql = "INSERT INTO vendas_produtos SET id_venda = '$id_venda', id_produto = '".($prod['id'])."', quantidade = '1'";
			$this->db->query($sql);
		}

		unset($_SESSION['carrinho']);

		return $link;
	}
}