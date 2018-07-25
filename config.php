<?php
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development'){
define("BASE_URL", "https://localhost/sistemas/loja1/");
$config['host'] = 'localhost';
$config['dbname'] = 'loja';
$config['dbuser'] = 'root';
$config['dbpass'] = '';
}else{
define("BASE_URL", "site.com.br");
$config['host'] = 'localhost';
$config['dbname'] = 'loja';
$config['dbuser'] = 'root';
$config['dbpass'] = '';
}
global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].';host='.$config['host'], $config['dbuser'], $config['dbpass']);
} catch (PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}