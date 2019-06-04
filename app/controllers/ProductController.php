<?php

namespace app\controllers;



class ProductController
{
  public static function activeView($id) {
    require_once ROOT.'/app/views/product/view.php';
    return true;
  }
}