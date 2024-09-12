<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost:8000/marketplace/");
	define("BASE_URL_SITE", "http://localhost:8000/marketplace/");
	define("PATH_SITE", "../marketplace/");
	$config['dbname'] = 'marketplace';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'password';
} else {
	define("BASE_URL", "http://localhost:8000/marketplace/");
	define("BASE_URL_SITE", "http://localhost:8000/marketplace/");
	define("PATH_SITE", "../marketplace/");
	$config['dbname'] = 'marketplace';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'password';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}