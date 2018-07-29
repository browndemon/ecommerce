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
}