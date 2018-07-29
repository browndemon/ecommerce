<?php
class carrinhoController extends controller{

	public function index(){
		$dados = array();
		$prods = array();
		if(isset($_SESSION['carrinho'])){
			$prods = $_SESSION['carrinho'];
		}
		if (count($prods)) {
			$produtos = new produtos();
			$dados['produtos'] = $produtos->get_produtos_by_id($prods);
			
			$this->loadTemplate("carrinho", $dados);
		}else{
			header("Location: /sistemas/loja1");
		}
		
	}

	public function add($id = ''){

		if(!empty($id)){
			if(!isset($_SESSION['carrinho'])){
				$_SESSION['carrinho'] = array();

			}

			$_SESSION['carrinho'] [] = $id;

			header("Location: /sistemas/loja1/carrinho");
		}
	}

	public function del($id){
		if (!empty($id)) {
			foreach ($_SESSION['carrinho'] as $cchave => $cvalor) {
				if($id == $cvalor){
					unset($_SESSION['carrinho'] [$cchave]);
				}
			}

			header("Location: /sistemas/loja1/carrinho");

		}
	}

	public function finalizar(){
		$dados = array(
			'pagamentos' => array(),
			'total' => 0,
			'erro' => ''
		);

		$p = new pagamentos();

		$dados['pagamentos'] = $p->get_pagamentos();

		$prods = array();
		if(isset($_SESSION['carrinho'])){
			$prods = $_SESSION['carrinho'];
		}
		if (count($prods)) {
			$produtos = new produtos();
			$dados['produtos'] = $produtos->get_produtos_by_id($prods);

			foreach ($dados['produtos'] as $prod) {
				$dados['total'] += $prod['preco'];
			}
			
		}

		if(isset($_POST['nome']) && !empty($_POST['nome'])){
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);

			$endereco = '';
			if (isset($_POST['endereco'])) {
				$endereco = addslashes($_POST['endereco']);
			}
			$pg = '';
			if(isset($_POST['pg'])){
				$pg = $_POST['pg'];

			}
			
			if(!empty($email) && !empty($senha) && !empty($endereco) && !empty($ph)){
				$udid = 0;
				$u = new usuario();
				if($u->isExiste($email)){
					if($u->isExiste($email, $senha)){
						$udid = $u->getId($email);
					}else{
						$dados['erro'] = "Usuário e/ou senha errados";
					}
				}else{
					$uid = $u->criar($nome, $email, $senha);
				}

				if($uid > 0){
					$subtotal = 0;
					$prods = array();
					if(isset($_SESSION['carrinho'])){
						$prods = $_SESSION['carrinho'];
					}
					if (count($prods)) {
						$produtos = new produtos();
						$prods = $produtos->get_produtos_by_id($prods);

						foreach ($prods as $prod) {
							$subtotal += $prod['preco'];
						}
						
					}
				}

				$v = new vendas();
				$link = $v->setVenda($uid, $endreco, $subtotal, $pg, $prods);

				header("Location: ".$link);

			}else{
				$dados['erro'] = "Preencha todos os campos!";
			}
		}
		
		$this->loadTemplate("finalizar", $dados);
	}

	public function obrigado(){
		$dados = array();
		
		$this->loadTemplate("obrigado", $dados);
	}
}