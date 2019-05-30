<?php
require "vendor/autoload.php";
require "app/models/User.php";
require 'ConnectDb.php';


session_start();
$url = $_SERVER['REQUEST_URI'];
$controller = [];
if ($url == "/") {
  $controller = ["app\controllers\UserController", "index"];
} elseif ($url == '/registration') {
  $controller = ["app\controllers\UserController", "registration"];
}

if(empty($controller)) {
  var_dump('404 | ERROR');die;
} else {
  call_user_func($controller);
}