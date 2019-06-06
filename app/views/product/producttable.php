<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php
$latestProducts = Product::getProducts();
?>
  <main class="main">
    <div class="container">
      <table class="product-table">
        <button class="product-table__button product-table__button_green">Добавить товар</button>
        <tr class="product-table__row">
          <th class="product-table__cell-header">Id</th>
          <th class="product-table__cell-header">Картинка</th>
          <th class="product-table__cell-header">Название</th>
          <th class="product-table__cell-header">Артикул</th>
          <th class="product-table__cell-header">Цена</th>
          <th class="product-table__cell-header">Выберите действие</th>
        </tr>
        <?php foreach ($latestProducts as $product): ?>
          <tr class="product-table__row">
            <td class="product-table__cell"><?=$product['id']?></td>
            <td class="product-table__cell">
              <img class="product-table__image" src="/web/images/<?=$product['image']?>" alt="">
            </td>
            <td class="product-table__cell"><?=$product['name']?></td>
            <td class="product-table__cell"><?=$product['code']?></td>
            <td class="product-table__cell"><?=$product['price']?></td>
            <td class="product-table__cell">
              <button class="product-table__button product-table__button_yellow">Редактировать</button>
              <button class="product-table__button product-table__button_red">Удалить</button>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
      <div class="product-add">

      </div>
      <div class="product-edit">

      </div>
      <div class="product-delete">

      </div>
    </div>
  </main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>