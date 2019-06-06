<?php

namespace app\controllers;

class SiteController
{
  public function index() {
    require 'app/views/site/index.php';
  }

  public function products() {
    require 'app/views/product/producttable.php';
  }
}