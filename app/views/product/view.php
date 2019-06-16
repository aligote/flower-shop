<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<main class="main">
  <div class="container">
    <div class="product-view">
      <div class="product-view-left">
       <img class="product-view-left__image" src="/web/images/<?php echo $product['image'] ?>" alt="">
      </div>
      <div class="product-view-right">
       <h2 class="product-view-right__title">Название: <?php echo $product['title'] ?></h2>
        <h3 class="product-view-right__article">Артикул: <?php echo $product['code'] ?></h3>
       <h3 class="product-view-right__price">Цена: <?php echo $product['price'] ?> ₽</h3>
       <a href="#" class="product-view-right__order">Заказать</a>
      </div>
    </div>
  </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>