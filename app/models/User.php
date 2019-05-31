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

  public static function authorization($email, $password) {
    $db = ConnectDb::getConnection();
    $mail = trim(filter_var($_POST['email'], FILTER_SANITIZE_STRING));
    $pass = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));
    $sql = "SELECT id FROM users WHERE email == :email && password == :password";
    $statement = $db->prepare($sql);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':password', $password);
    $statement->execute(['email' => $mail, 'password' => $pass]);
    $user = $statement->fetch(PDO::FETCH_OBJ);
    if ($user->id == 0) {
      echo 'Такого пользователя нет';
    } else {
      setcookie('email', $email, time() + 3600 * 24 * 30, "/");
    }
  }
}