<?php
class User {
  public static function registration($login, $password) {
    $db = ConnectDb::getConnection();
    $sql = "INSERT INTO users(login, password) VALUES (:login, :password)";
    $statement = $db->prepare($sql);
    $statement->bindParam(':login', $login);
    $statement->bindParam(':password', $password);
    return $statement->execute();
  }
}