<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<main class="main">
  <div class="container">
    <div class="product">
       <img class="product__image" src="/web/images/<?php echo $product['image'] ?>" alt="">
       <h3 class="product__title"><?php echo $product['title'] ?></h3>
       <h2 class="product__price">Цена: <?php echo $product['price'] ?> ₽</h2>
       <a class="product__order">Заказать</a>
    </div>
  </div>
</main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>