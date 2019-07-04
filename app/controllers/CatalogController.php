<?php

namespace app\controllers;

use Catalog;

class CatalogController
{
  public function viewRoses() {
    $products = Catalog::getCategoryProducts(1);
    require_once 'app/views/catalog/index.php';
  }

  public function viewTulips() {
    $products = Catalog::getCategoryProducts(2);
    require_once 'app/views/catalog/index.php';
  }

  public function viewPeonies() {
    $products = Catalog::getCategoryProducts(3);
    require_once 'app/views/catalog/index.php';
  }

  public function viewBouquets() {
    $products = Catalog::getCategoryProducts(4);
    require_once 'app/views/catalog/index.php';
  }

  public function view101Roses() {
    $products = Catalog::getCategoryProducts(5);
    require_once 'app/views/catalog/index.php';
  }

  public function viewFlowersInABox() {
    $products = Catalog::getCategoryProducts(6);
    require_once 'app/views/catalog/index.php';
  }
}