<?php

use DI\Container;

session_start();
require "vendor/autoload.php";
require "ConnectDb.php";
require "app/models/User.php";
require "app/models/Catalog.php";
require "app/models/Product.php";


$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
  $r->addRoute('GET', '/', ["app\controllers\SiteController", "index"]);
  $r->addRoute('GET', '/product/{id:\d+}', ["app\controllers\ProductController", "activeView"]);
  $r->addRoute('GET', '/products', ["app\controllers\ProductController", "products"]);
  $r->addRoute('POST', '/registration', ["app\controllers\UserController", "registration"]);
  $r->addRoute('POST', '/authorization', ["app\controllers\UserController", "authorization"]);
  $r->addRoute('GET', '/output', ["app\controllers\UserController", "output"]);
  $r->addRoute('POST', '/add-product', ["app\controllers\ProductController", "addProduct"]);
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
  $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
  case FastRoute\Dispatcher::NOT_FOUND:
    var_dump("Страница не существует");
    break;
  case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
    $allowedMethods = $routeInfo[1];
    var_dump("Метод не существует");
    break;
  case FastRoute\Dispatcher::FOUND:
    $handler = $routeInfo[1];
    $vars = $routeInfo[2];
    $container = new Container();
    $container->call($handler, $vars);
    break;
}