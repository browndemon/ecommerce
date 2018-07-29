<?php
class contatoController extends controller{

	public function index(){
		$dados = array('msg' => '');

		if(isset($_POST['nome']) && !empty($_POST['nome'])){
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$msg = addslashes($_POST['mensagem']);

			$html = "Nome: ".$nome."<br/>E-mail: ".$email."<br/>Mensagem: ".$msg;

			$headers = 'From: contato@email.com'."\r\n";
			$headers .= "Reply-To".$email."\r\n";
			$headers .= "X-Mailer: PHP/".phpversion();
			mail("contato@email.com", "Contato pelo site em".date('d/m/Y'), $html, $header);

			$dados['msg'] = "E-mail enviado com sucesso!";

		}
		$this->loadTemplate("contato", $dados);
	}
}