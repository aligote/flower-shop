<?php
class User {
  public static function registration($email, $password, $name, $phone) {
    $db = ConnectDb::getConnection();
    $sql = "INSERT INTO users(email, password, name, phone) VALUES (:email, :password, :name, :phone)";
    $statement = $db->prepare($sql);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':password', $password);
    $statement->bindParam(':name', $name);
    $statement->bindParam(':phone', $phone);
    return $statement->execute();
  }
}