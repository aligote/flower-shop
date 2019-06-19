<?php


namespace app\controllers;

use News;


class NewsController
{
  public function view() {
    require 'app/views/news/view.php';
  }
}