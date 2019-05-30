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
      User::registration($_POST['email'], $_POST['password'], $_POST['name'], $_POST['phone']);
    }
    require 'app/views/site/index.php';
  }
}