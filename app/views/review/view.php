<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<main class="main">
  <div class="container">
    <form class="reviews" action="#" method="post">
      <h2 class="reviews__title">Введите ваш отзыв:</h2><br>
      <input class="reviews__name" type="text" name="name" placeholder="Введите ваше Имя"><br>
      <textarea class="reviews__text" rows="5" cols="100" name="text" placeholder="Введите текст отзыва"></textarea><br>
      <button class="reviews__button" type="submit" name="submit">Опубликовать</button>
    </form>
  </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>