<?php

namespace app\controllers;

class SiteController
{
  public function index() {
    require 'app/views/site/index.php';
  }

  public function contacts() {
    require 'app/views/site/contacts.php';
  }

  public function aboutUs() {
    require 'app/views/site/aboutUs.php';
  }
}