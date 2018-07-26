<?php
include '/functions/querysController.php';

class controller{

	protected $db;
	public function __construct(){
		try {
		global $config;
		$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);	
		} catch (PDOException $e) {
			echo "Falhou: ".$e->getMessage();
			exit;
		}
	}	
	public function loadView($viewName, $viewData = array()){
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()){
		$querys = new Querys();
		$menu = $querys->listCatego();
		require 'views/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData =array()){
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}
}