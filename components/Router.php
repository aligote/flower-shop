<?php


class Router
{
  public $routes;

  public function __construct()
  {
    $routesPath = ROOT."/config/routes.php";
    return $this->routes = require_once($routesPath);
  }

  public function run() {
    if (!empty($_SERVER["REQUEST_URI"])) {
      echo trim($_SERVER["REQUEST_URI"], '/');
    }
  }
}