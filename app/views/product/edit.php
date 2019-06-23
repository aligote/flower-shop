<div class="edit-product">
  <div class="container">
    <form class="edit-product-form"  id="edit-product-form" action="/edit-product" method="post" enctype="multipart/form-data">
      <h2 class="edit-product-form__form-title">Форма редактирования товара</h2>
      <a class="edit-product-form__link" href="#" onclick="closeForm('edit-product-form'); return false;">
        <img class="edit-product-form__icon" src="/web/icons/close.png" alt="">
      </a>
      <img class="edit-product__image-view" src="/web/images/<?php echo $product['image'] ?>" alt=""><br>
      <input class="edit-product__file" id="file" type="file" name="image">
      <label class="edit-product__image" for="file">Загрузить новую картинку</label><br>
      <label class="edit-product__title">Название товара:</label>
      <input class="edit-product-form__title" type="text" name="title" value="<?=$product['title']?>"><br>
      <label class="edit-product__title">Артикул товара:</label>
      <input class="edit-product-form__code" type="number" name="code" value="<?=$product['code']?>"><br>
      <label class="edit-product__title">Свойства товара:</label>
      <input class="edit-product-from__composition" type="text" name="composition" value="<?=$product['composition']?>"><br>
      <label class="edit-product__title">Цена товара:</label>
      <input class="edit-product-form__price" type="number" name="price" value="<?=$product['price']?>"><br>
      <button class="edit-product-form__button" type="submit" name="submit">Редактировать</button>
    </form>
  </div>
</div>