<?php
class User {
  public static function registration($login, $password) {
    $db = ConnectDb::getConnection();
    $sql = "INSERT INTO users(login, password) VALUES (:login, :password)";
    $result = $db->prepare($sql);
    $result->bindParam(':login', $login);
    $result->bindParam(':password', $password);
    return $result->execute();
  }
}