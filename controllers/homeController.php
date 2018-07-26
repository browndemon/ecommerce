<?php
class homeController extends controller{

	public function index(){
		$produtos = new produtos();
		$dados['produtos'] = $produtos->listarProdutos(2);
		$this->loadTemplate('home', $dados);

	}
}