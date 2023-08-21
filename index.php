<?php 
session_start();
header("Access-Control-Allow-Origin : *");
header("Access-Control-Allow-Headers : *");
require_once 'bootstrap.php';

$app = new App();

?>