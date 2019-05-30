<?php
namespace app\controllers;

use User;

class UserController
{
  public function index()
  {
    require 'app/views/site/index.php';
  }

  public function registration()
  {
    if (isset($_POST['submit'])) {
      $login = $_POST['login'];
      $password = $_POST['password'];
      User::registration($login, $password);
    }
    require 'app/views/site/registration.php';
  }
}