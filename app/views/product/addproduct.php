<div class="add-product">
  <div class="container">
    <form class="add-product-form"  id="add-product-form" action="/authorization" method="post">
      <h2 class="add-product-form__title">Форма добавления товара</h2>
      <a class="add-product-form__link" href="#" onclick="closeForm('authorization-form'); return false;">
        <img class="add-product-form__icon" src="/web/icons/close.png" alt="">
      </a>
      <input class="add-product-form__title" type="text" name="email" placeholder="Введите ваш E-mail">
      <input class="add-product-form__code" type="text" name="password" placeholder="Введите ваш пароль">
      <button class="add-product-form__button" type="submit" name="submit">Войти</button>
    </form>
  </div>
</div>