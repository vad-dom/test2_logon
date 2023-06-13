<div class="wrapper flex_column">
    <div id="<?=$auth_success?>">
        Мы успешно авторизовались
    </div>
    <div class="flex_end margin_bottom">
        <a class="logout" href="logout.php?logout=ok">Выйти</a>
    </div>
    <h1>Информация о пользователе</h1>
    <div class="user_data flex_block align_bottom">
        <p>Имя: <?=$user_name?></p>
        <p align="right">Дата&nbsp;рождения: <span><?=$user_birthday?></span></p>
    </div>
    <img class="user_photo" src="/img/<?=$user_img_path?>" alt="Фото пользователя отсутствует">
</div>