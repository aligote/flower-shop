<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php
$latestNews = News::getLatestNews();
?>
  <main class="main">
    <div class="news">
      <div class="container">
        <ul class="news__list">
          <?php if($_SESSION['admin'] == 1): ?>
          <a class="news__link-add" href="/add-news">Добавить новость</a>
          <?php endif; ?>
          <?php foreach ($latestNews as $news): ?>
            <li class="news__item">
              <a class="news__link" href="/news/<?php echo $news['id'] ?>">
                <img class="news__image" src="/web/images/<?php echo $news['image'] ?>" alt="">
                <div>
                  <h3 class="news__title"><?php echo $news['title'] ?></h3>
                  <span class="news__date"><?php echo $news['date'] ?></span>
                </div>
              </a>
              <?php if ($_SESSION['admin'] == 1): ?>
              <a class="news__link-delete" href="/delete-news/<?php echo $news['id'] ?>">
                <img class="news__icon" src="/web/icons/close.png" alt="">
              </a>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>