<?php
require_once "vendor/autoload.php";
class QueryBuilder {
  public $pdo;
  public function __construct()
  {
    $dotenv = Dotenv\Dotenv::create(__DIR__);
    $dotenv->load();
    $user = getenv('DB_USERNAME');
    $password = getenv('DB_PASSWORD');
    $db = getenv('DB_DATABASE');
    $host = getenv('DB_HOST');
    $this->$pdo = new PDO('mysql:host='.$host.'; dbname='.$db, $user, $password);
  }

  function reg($table) {
    $sql = "INSERT INTO $table ('login, password') VALUES (:login, :password)";
    $statement = $this->$pdo->prepare($sql);
    $statement->execute($_POST);
  }
}