<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php
$latestNews = News::getLatestNews();
?>
  <main class="main">
    <div class="news">
      <div class="container">
        <ul class="news__list">
          <?php foreach ($latestNews as $news): ?>
            <li class="news__item">
              <h3 class="news__title"><?php echo $news['title'] ?></h3>
              <img class="news__image" src="/web/images/<?php echo $news['image'] ?>" alt="">
              <h2 class="news__price">Цена: <?php echo $news['text'] ?> ₽</h2>
              <p class="news__date"><?php echo $news['date'] ?></p>
              <a href="/news/<?php echo $news['id'] ?>" class="news__details">Подробнее</a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>