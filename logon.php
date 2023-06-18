<?php
    require_once 'settings.php';

    // по-хорошему, нужно было сделать класс с методами logon и logout
    // для упрощения это опущено
    // плюс, в задании было требование о минимальном количестве файлов
    $login = $_POST['login']?? false;
    $pswd = $_POST['pswd']?? false;
    $captcha = $_POST['captcha']?? false;
    if ($pswd) $pswd = md5($pswd);

    if ($login && $pswd && $captcha) {
        if (!Captcha::check($captcha)) echo 'Не такой код';
        else {
            $user_data = new UserData();
            if ($user_data = $user_data->getUserByLoginPswd($login, $pswd)) {
                if (!session_id()) session_start();
                $_SESSION['user_data']['user_name'] = $user_data['name'];
                $_SESSION['user_data']['user_img_path'] = $user_data['img_path'];
                if (empty($user_data['birthday'])) $_SESSION['user_data']['user_birthday'] = 'не указана';
                else {
                    $user_birthday = new DateTime($user_data['birthday']);
                    $_SESSION['user_data']['user_birthday'] = $user_birthday->format('d.m.Y');
                }
                $_SESSION['auth_success'] = true;
                echo 'ok';
            } 
            else echo 'Не такой логин или пароль';
        }
    } 
    else echo 'Заполните все поля';
?>
