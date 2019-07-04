<?php

namespace app\controllers;

use Review;

class ReviewController
{
  public function view() {
    require 'app/views/review/index.php';
  }

  public function addReview() {
    if (isset($_POST['submit'])) {
      Review::addReview($_POST['name'], $_POST['text']);
    }
    require 'app/views/review/index.php';
  }

  public function deleteReview($id) {
    Review::deleteReview($id);
    require 'app/views/review/index.php';
  }
}