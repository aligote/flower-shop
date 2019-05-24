<?php
require_once "vendor/autoload.php";
require "database/QueryBuilder.php";
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();
$user = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$db = getenv('DB_DATABASE');
$host = getenv('DB_HOST');
$pdo = new PDO('mysql:host='.$host.'; dbname='.$db, $user, $password);