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
    $statement->execute();
    header('Location: /');
  }

  public static function authorization($email, $password) {
    $db = ConnectDb::getConnection();
    $sql = "SELECT id FROM users WHERE email=:email AND password=:password";
    $statement = $db->prepare($sql);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':password', $password);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_OBJ);
    if ($user->id == 0) {
      header('Location: /');
    } else {
      setcookie('email', $email, time() + 3600 * 24 * 30, "/");
      header('Location: /');
    }
  }
  public static function output() {
    setcookie('email', "", time() - 3600 * 24 * 30, "/");
    unset($_COOKIE['email']);
    header('Location: /');
  }
}