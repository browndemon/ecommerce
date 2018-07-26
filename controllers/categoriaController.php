<?php
class categoriaController extends controller{

	public function ver($id){
	if(!empty($id)){
		$dados = array(
			'categoria' => '',
			'produtos' => array()
		);
			$produtos = new produtos();
			$dados['produtos'] = $produtos->listarCategoria($id);

			$cat = new categorias();
			$dados['categoria'] = $cat->getNome($id);

			$this->loadTemplate("categoria", $dados);
	}else{
		echo "ID Não existente";
	}
	}
}