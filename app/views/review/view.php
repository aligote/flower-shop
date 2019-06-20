<?php
$latestReviews = Review::getLatestReview();
?>
<div class="reviews">
  <div class="container">
    <ul class="reviews__list">
      <?php foreach ($latestReviews as $review): ?>
        <li class="reviews__item">
          <h3 class="reviews__name"><?php echo $review['name'] ?></h3>
          <p class="reviews__text"><?php echo $review['text'] ?></p>
          <a class="reviews__link" href="/delete-review/<?php echo $review['id'] ?>">
            <img class="reviews__icon" src="/web/icons/close.png" alt="">
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>