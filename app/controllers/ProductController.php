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
    require 'app/views/product/table.php';
  }

  public function addProduct() {
    if (isset($_POST['submit'])) {
      Product::addProduct($_POST['title'], $_POST['code'], $_POST['price']);
    }
    require 'app/views/product/table.php';
  }

  public function editProduct($id) {
    $product = Product::getProduct($id);
    require_once 'app/views/product/edit.php';
    if (isset($_POST['submit'])) {
      Product::editProduct($_POST['title'], $_POST['code'], $_POST['price']);
    }
    require 'app/views/product/table.php';
  }

  public function deleteProduct($id) {
    Product::deleteProduct($id);
    require 'app/views/product/table.php';
  }
}