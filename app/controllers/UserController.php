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
      User::registration($_POST['login'], $_POST['password']);
    }
    require 'app/views/site/registration.php';
  }
}