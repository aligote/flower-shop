<?php
require "../vendor/autoload.php";

$url = $_SERVER['REQUEST_URI'];

if ($url == "/") {
  require "../app/views/index.php"; exit;
} elseif ($url == '/reg') {
  require "../app/views/registration.php"; exit;
}