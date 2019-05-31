<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/web/css/normalize.css">
  <link rel="stylesheet" href="/web/css/main.css">
  <title>Flower-Shop</title>
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="header__top">
        <nav class="nav">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="/" class="nav__link">Главная</a>
            </li>
            <li class="nav__item">
              <a href="#" class="nav__link">Новости</a>
            </li>
            <li class="nav__item">
              <a href="#" class="nav__link">Отзывы</a>
            </li>
            <li class="nav__item">
              <a href="#" class="nav__link">Контакты</a>
            </li>
            <li class="nav__item">
              <a href="#" class="nav__link">О нас</a>
            </li>
          </ul>
        </nav>
        <div class="auth">
          <ul class="auth__list">
            <?php
            if($_COOKIE['login'] == ''):
              ?>
            <li class="auth__item">
              <a href="#" onclick="showForm('authorization-form'); return false;" class="auth__link auth__link_authorization">Вход</a>
            </li>
            <li class="auth__item">
              <a href="#" onclick="showForm('registration-form'); return false;" class="auth__link auth__link_registration">Регистрация</a>
            </li>
            <?php
            else:
              ?>
            <li class="auth__item">
              <h2><?=$_COOKIE['login']?></h2>
              <a href="#" class="auth__link auth__link_exit">Выход</a>
            </li>
            <?php
            endif;
            ?>
          </ul>
        </div>
      </div>
      <div class="header__middle">
        <div class="header-logo">
          <a class="header-logo__link" href="/">
            <img class="header-logo__image" src="/web/images/flower-shop.png" alt="">
          </a>
        </div>
        <form class="search-form" action="#" method="post">
          <input class="search-form__content" type="text" placeholder="Поиск товара">
          <button class="search-form__button">Искать</button>
        </form>
        <div class="basket">
          <img class="basket__image" src="/web/images/basket.png" alt="">
        </div>
      </div>
      <div class="header__bottom">

      </div>
    </div>
    <?php require_once __DIR__ . '/../../views/user/registration.php'; ?>
    <?php require_once __DIR__ . '/../../views/user/authorization.php'; ?>
  </header>