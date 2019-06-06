<?php

namespace app\controllers;

use Product;

class ProductController
{
  public function activeView($id) {
    $product = Product::getProduct($id);
    require_once 'app/views/product/view.php';
  }

  public function products() {
    require 'app/views/product/producttable.php';
  }

  public function addProduct() {
    if (isset($_POST['submit'])) {
      Product::addProduct($_POST['email'], $_POST['password']);
    }
    require 'app/views/product/producttable.php';
  }
}