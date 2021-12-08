<?php

$now_hours = date("H");

//Необходимо подгружать на страницу с 8 до 20.00 - дневная тема (светлый цвет) и с 20.01 до 7.59 - ночную тему (темный фон).

if ($now_hours >= 8 && $now_hours <= 20)
{
    $time = 'background-light';
} else {
    $time = 'background-night';
}

if (isset ($_COOKIE['bg_color'])){
    $bgColor = $_COOKIE['bg_color'];
}

?>
<link rel="stylesheet" href="styles/styles.css">

<header class="<?php echo $time; ?>" style="background-color: <?= $bgColor; ?>">
        <span class="header-grid">
            <div class="img-logo">
                <img src="img/logo.png" alt="My logo" title="My logo">
            </div>
            <div>
                <nav>
                    <a href="html/table.html" target="_blank">Таблица</a>
                </nav>
                <nav>
                    <a href="massiv.php" target="_blank">Массивы</a>
                </nav>
                <nav>
                    <a href="register.php" target="_blank">Регистрация</a>
                </nav>
                <nav>
                    <a href="auth.php" target="_blank">Авторизация</a>
                </nav>
            </div>
            <div>
                <p>Выберите цвет фона:</p>
                  <form action="changeColor.php" method="post">
                   <p><select size="3" name="color">
                            <option value="blue" <? if ($bgColor === 'blue') {?>selected<?}?>>Синий</option>
                            <option value="red" <? if ($bgColor === 'red') {?>selected<?}?>>Красный</option>
                            <option value="green" <? if ($bgColor === 'green') {?>selected<?}?>>Зеленый</option>
                            <option value="yellow" <? if ($bgColor === 'yellow') {?>selected<?}?>>Желтый</option>
                   </select></p>
                   <p><input type="submit" value="Отправить"></p>
                  </form>
            </div>

</header>
