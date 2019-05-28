<?php
require "vendor/autoload.php";

$url = $_SERVER['REQUEST_URI'];

if ($url == "/") {
  require "app/views/site/index.php"; exit;
} elseif ($url == '/registration') {
  require "app/views/site/registration.php"; exit;
}