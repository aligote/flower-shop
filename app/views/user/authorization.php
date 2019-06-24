<div class="authorization">
  <div class="container">
    <form class="authorization-form"  id="authorization-form" action="/authorization" method="post">
      <h2 class="authorization-form__title">Личный кабинет</h2>
      <a class="authorization-form__link" href="#" onclick="closeForm('authorization-form'); return false;">
        <img class="authorization-form__icon" src="/web/icons/close.png" alt="">
      </a>
      <input class="authorization-form__email" type="email" name="email" placeholder="Введите ваш E-mail">
      <input class="authorization-form__password" type="password" name="password" placeholder="Введите ваш пароль">
      <button class="authorization-form__button" type="submit" name="submit">Войти</button>
    </form>
  </div>
</div>