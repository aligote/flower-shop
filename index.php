<?php

use DI\Container;

session_start();
require "vendor/autoload.php";
require "ConnectDb.php";
require "app/models/User.php";
require "app/models/Catalog.php";
require "app/models/Product.php";
require "app/models/Review.php";
require "app/models/News.php";

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
  session_start();

  //Site
  $r->addRoute('GET', '/', ["app\controllers\SiteController", "index"]);
  $r->addRoute('GET', '/contacts', ["app\controllers\SiteController", "contacts"]);
  $r->addRoute('GET', '/about-us', ["app\controllers\SiteController", "aboutUs"]);

  //Product
  $r->addRoute('GET', '/product/{id:\d+}', ["app\controllers\ProductController", "activeView"]);
  if (User::admin() == 1) {
    $r->addRoute('GET', '/products', ["app\controllers\ProductController", "products"]);
    $r->addRoute('POST', '/add-product', ["app\controllers\ProductController", "addProduct"]);
    $r->addRoute('POST', '/edit-product/{id:\d+}', ["app\controllers\ProductController", "editProduct"]);
    $r->addRoute('GET', '/delete-product/{id:\d+}', ["app\controllers\ProductController", "deleteProduct"]);
  }

  //User
  $r->addRoute('POST', '/registration', ["app\controllers\UserController", "registration"]);
  $r->addRoute('POST', '/authorization', ["app\controllers\UserController", "authorization"]);
  $r->addRoute('GET', '/output', ["app\controllers\UserController", "output"]);


  //Review
  $r->addRoute('GET', '/reviews', ["app\controllers\ReviewController", "view"]);
  $r->addRoute('POST', '/add-review', ["app\controllers\ReviewController", "addReview"]);
  if (User::admin() == 1) {
    $r->addRoute('GET', '/delete-review/{id:\d+}', ["app\controllers\ReviewController", "deleteReview"]);
  }

  //News
  $r->addRoute('GET', '/news', ["app\controllers\NewsController", "index"]);
  $r->addRoute('GET', '/news/{id:\d+}', ["app\controllers\NewsController", "activeView"]);
  if (User::admin() == 1) {
    $r->addRoute('GET', '/add-news', ["app\controllers\NewsController", "addNews"]);
    $r->addRoute('POST', '/add-news', ["app\controllers\NewsController", "addNews"]);
    $r->addRoute('GET', '/delete-news/{id:\d+}', ["app\controllers\NewsController", "deleteNews"]);
  }

  //Catalog
  $r->addRoute('GET', '/catalog/roses', ["app\controllers\CatalogController", "viewRoses"]);
  $r->addRoute('GET', '/catalog/tulips', ["app\controllers\CatalogController", "viewTulips"]);
  $r->addRoute('GET', '/catalog/peonies', ["app\controllers\CatalogController", "viewPeonies"]);
  $r->addRoute('GET', '/catalog/bouquets', ["app\controllers\CatalogController", "viewBouquets"]);
  $r->addRoute('GET', '/catalog/101-roses', ["app\controllers\CatalogController", "view101Roses"]);
  $r->addRoute('GET', '/catalog/flowers-in-a-box', ["app\controllers\CatalogController", "viewFlowersInABox"]);
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