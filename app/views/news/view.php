<?php require_once __DIR__ . '/../layouts/header.php'; ?>
  <main class="main">
    <div class="container">
      <div class="news-view">
        <h3 class="news-view__title"><?php echo $news['title'] ?></h3>
        <img class="news-view__image" src="/web/images/<?php echo $news['image'] ?>" alt="">
        <p class="news-view__text"><?php echo $news['text'] ?></p>
        <span class="news-view__date"><?php echo $news['date'] ?></span>
      </div>
    </div>
  </main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>