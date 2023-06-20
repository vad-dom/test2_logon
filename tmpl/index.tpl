<div class="wrapper">
    <h1>Тестовая авторизация</h1>
    <form id="auth" name="auth" method="post">
        <label class="login_label" for="login">Логин: </label>
        <input class="login_input" type="text" name="login" id="login" autofocus maxlength="255" required>
        <label class="pswd_label" for="password">Пароль: </label>
        <input class="pswd_input" type="password" name="password" id="password" maxlength="32" required>
        <img class="captcha_img" src="/captcha/captcha.php" alt="Капча" />
        <label class="captcha_label" for="captcha">Код с картинки: </label>
        <input class="captcha_input" type="text" name="captcha" id="captcha" maxlength="4" required>
        <input type="submit" name="submit" value="Войти">
        <p id="error_text"></p>
    </form>
</div>