<?php
require "vendor/autoload.php";
require 'ConnectDb.php';
require "app/models/User.php";
require "app/models/Catalog.php";

session_start();
$url = $_SERVER['REQUEST_URI'];
$controller = [];

if ($url == "/") {
  $controller = ["app\controllers\UserController", "index"];
} elseif ($url == '/registration') {
  $controller = ["app\controllers\UserController", "registration"];
} elseif ($url == '/authorization') {
  $controller = ["app\controllers\UserController", "authorization"];
} elseif ($url == "/output") {
  $controller = ["app\controllers\UserController", "output"];
}

if(empty($controller)) {
  var_dump('404 | ERROR');die;
} else {
  call_user_func($controller);
}