<div class="add-product">
  <div class="container">
    <form class="add-product-form"  id="add-product-form" action="#" method="post" enctype="multipart/form-data">
      <h2 class="add-product-form__form-title">Форма добавления товара</h2>
      <a class="add-product-form__link" href="#" onclick="closeForm('add-product-form'); return false;">
        <img class="add-product-form__icon" src="/web/icons/close.png" alt="">
      </a>
      <input class="add-product__file" id="file" type="file" name="image">
      <label class="add-product__image" for="file">Загрузить картинку товара</label>
      <input class="add-product-form__title" type="text" name="title" placeholder="Введите название товара">
      <input class="add-product-form__code" type="number" name="code" placeholder="Введите артикул товара">
      <input class="add-product-form__price" type="number" name="price" placeholder="Введите цену товара">
      <button class="add-product-form__button" type="submit" name="submit">Добавить</button>
    </form>
  </div>
</div>