<?php


namespace app\controllers;

use News;


class NewsController
{
  public function index() {
    require 'app/views/news/index.php';
  }

  public function addNews() {
    if (isset($_POST['submit'])) {
      News::addNews($_POST['title'], $_POST['text'], $_POST['date']);
    }
    require 'app/views/news/add.php';
  }

  public function activeView($id) {
    $news = News::getOneNews($id);
    require_once 'app/views/news/view.php';
  }

  public function deleteNews($id) {
    News::deleteNews($id);
    require 'app/views/news/index.php';
  }
}