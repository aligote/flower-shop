<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<main class="main">
  <div class="add-news">
    <div class="container">
      <form class="add-news-form" action="/add-news" method="post" enctype="multipart/form-data">
        <input class="add-news-form__title" type="text" name="title" placeholder="Введите название статьи"><br>
        <input class="add-news__file" id="file" type="file" name="image">
        <label class="add-news__image" for="file">Загрузить картинку статьи</label><br>
        <textarea class="add-news-form__text" rows="5" cols="100" name="text" placeholder="Введите содержание статьи"></textarea><br>
        <input class="add-news-form__date" type="date" name="date"><br>
        <button class="add-news-form__button" type="submit" name="submit">Опубликовать</button>
      </form>
    </div>
  </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>