<div class="registration">
  <div class="container">
    <form class="registration-form"  id="registration-form" action="/registration" method="post">
      <h2 class="registration-form__title">Регистрация</h2>
      <a class="registration-form__link" href="#" onclick="closeForm(); return false;">
        <img class="registration-form__icon" src="/web/icons/close.png" alt="">
      </a>
      <input class="registration-form__email" type="text" name="email" placeholder="Введите ваш E-mail">
      <input class="registration-form__password" type="text" name="password" placeholder="Введите ваш пароль">
      <input class="registration-form__name" type="text" name="name" placeholder="Введите ваше Имя">
      <input class="registration-form__phone" type="text" name="phone" placeholder="Введите номер телефона"><br>
      <button class="registration-form__button" type="submit" name="submit">Регистрация</button>
    </form>
  </div>
</div>