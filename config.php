<?php
require 'environment.php';

global $config;
$config = array();
if(ENVIRONMENT == 'development'){
define("BASE_URL", "http://localhost/sistemas/loja1/");
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
