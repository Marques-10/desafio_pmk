<?php
require('environment.php');

$config = array();

if (ENVIRONMENT == 'development') {
    define("BASE_URL", "http://localhost/desafio_pmk");
    $config['dbname'] = "pmk_cadastros";
    $config['host'] = "localhost";
    $config['dbuser'] = "root";
    $config['dbpass'] = "";
} else {
    $config['dbname'] = "pmk_cadastros";
    $config['host'] = "localhost";
    $config['dbuser'] = "root";
    $config['dbpass'] = "";
}

global $db;

try {
    $db = new PDO("mysql:dbname=".$config["dbname"].";host=".$config["host"], $config["dbuser"], $config["dbpass"]);
} catch (PDOException $e) {
    echo "Error: ". $e->getMessage();
    exit;
}

?>