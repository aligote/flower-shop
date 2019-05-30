<div class="registration">
  <div class="container">
    <form class="registration-form"  id="registration-form" action="#" method="post">
      <h2 class="registration-form__title">Регистрация</h2>
      <input class="registration-form__email" type="text" name="email" placeholder="Введите ваш E-mail">
      <input class="registration-form__password" type="text" name="password" placeholder="Введите ваш пароль">
      <input class="registration-form__name" type="text" name="name" placeholder="Введите ваше Имя">
      <input class="registration-form__phone" type="text" name="phone" placeholder="Введите ваш номер телефона"><br>
      <button class="registration-form__button" type="submit" name="submit">Регистрация</button>
    </form>
  </div>
</div>
<script>
  function showForm() {
    display = document.getElementById('registration-form').style.display;
    if (display === "none") {
      document.getElementById('registration-form').style.display = "block";
    } else {
      document.getElementById('registration-form').style.display = "none";
    }
  }
</script>