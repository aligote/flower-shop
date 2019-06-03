<?php

namespace app\controllers;

use Product;

class SiteController
{
  public function index() {
    require 'app/views/site/index.php';
    require 'app/views/product/view.php';
  }
}