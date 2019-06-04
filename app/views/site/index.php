<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php
$latestProducts = Product::getLatestProducts();
?>
  <main class="main">
    <div class="container">
      <div class="products">
        <ul class="products__list">
          <?php foreach ($latestProducts as $product): ?>
            <li class="products__item">
              <img class="products__image" src="/web/images/flower.jpg" alt="">
              <h3 class="products__title"><?php echo $product['name'] ?></h3>
              <h2 class="products__price">Цена: <?php echo $product['price'] ?> ₽</h2>
              <a href="/product/<?php echo $product['id'] ?>" class="products__details">Подробнее</a>
              <a class="products__order">Заказать</a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>