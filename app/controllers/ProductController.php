<?php

namespace app\controllers;

use Product;

class ProductController
{
  public function activeView($id) {
    $product = Product::getProduct($id);
    require_once 'app/views/product/view.php';
  }
}