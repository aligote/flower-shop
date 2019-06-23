<div class="add-product">
  <div class="container">
    <form class="add-product-form"  id="add-product-form" action="/add-product" method="post" enctype="multipart/form-data">
      <h2 class="add-product-form__form-title">Форма добавления товара</h2>
      <a class="add-product-form__link" href="#" onclick="closeForm('add-product-form'); return false;">
        <img class="add-product-form__icon" src="/web/icons/close.png" alt="">
      </a>
      <label class="add-product-form__category-title">Выбрать категорию товара: </label><br>
      <select class="add-product-form__category-list" name="category_id">
        <option value="1">Розы</option>
        <option value="2">Тюльпаны</option>
        <option value="3">Пионы</option>
        <option value="4">Букеты</option>
        <option value="5">101 роза</option>
        <option value="6">Цветы в коробке</option>
      </select><br>
      <input class="add-product__file" id="file" type="file" name="image">
      <label class="add-product__image" for="file">Загрузить картинку товара</label>
      <input class="add-product-form__title" type="text" name="title" placeholder="Введите название товара">
      <input class="add-product-form__code" type="number" name="code" placeholder="Введите артикул товара">
      <input class="add-product-from__composition" type="text" name="composition" placeholder="Введите состав товара">
      <input class="add-product-form__price" type="number" name="price" placeholder="Введите цену товара">
      <button class="add-product-form__button" type="submit" name="submit">Добавить</button>
    </form>
  </div>
</div>