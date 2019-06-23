<?php require_once __DIR__ . '/../layouts/header.php'; ?>
<?php
$latestProducts = Product::getProducts();
?>
  <main class="main">
    <div class="container">
      <table class="product-table">
        <a href="#" class="product-table__button product-table__button_green" onclick="showForm('add-product-form'); return false;">Добавить товар</a>
        <tr class="product-table__row">
          <th class="product-table__cell-header">Id</th>
          <th class="product-table__cell-header">Картинка</th>
          <th class="product-table__cell-header">Название</th>
          <th class="product-table__cell-header">Артикул</th>
          <th class="product-table__cell-header">Состав</th>
          <th class="product-table__cell-header">Цена</th>
          <th class="product-table__cell-header">Выберите действие</th>
        </tr>
        <?php foreach ($latestProducts as $product): ?>
          <tr class="product-table__row">
            <td class="product-table__cell"><?=$product['id']?></td>
            <td class="product-table__cell">
              <img class="product-table__image" src="/web/images/<?=$product['image']?>" alt="">
            </td>
            <td class="product-table__cell"><?=$product['title']?></td>
            <td class="product-table__cell"><?=$product['code']?></td>
            <td class="product-table__cell"><?=$product['composition']?></td>
            <td class="product-table__cell"><?=$product['price']?></td>
            <td class="product-table__cell">
              <a href="/edit-product/<?php echo $product['id'] ?>" class="product-table__button product-table__button_yellow" onclick="showForm('edit-product-form'); return false;">Редактировать</a>
              <a href="/delete-product/<?php echo $product['id'] ?>" class="product-table__button product-table__button_red">Удалить</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
    <?php require_once __DIR__ . '/../../views/product/add.php'; ?>
    <?php require_once __DIR__ . '/../../views/product/edit.php'; ?>
  </main>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>