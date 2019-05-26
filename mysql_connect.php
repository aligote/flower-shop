<?php
if(getenv('GLOBAL') == 'true') {
  require_once "vendor/autoload.php";
  $dotenv = Dotenv\Dotenv::create(__DIR__);
  $dotenv->load();
}
$user = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$db = getenv('DB_DATABASE');
$host = getenv('DB_HOST');
$dsn = 'mysql:host='.$host.'; dbname='.$db;
$pdo = new PDO($dsn, $user, $password);