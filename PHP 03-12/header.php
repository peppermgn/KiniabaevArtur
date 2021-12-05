<?php

$now_hours = date("H");
$now_minuts = date("i");

//Необходимо подгружать на страницу с 8 до 20.00 - дневная тема (светлый цвет) и с 20.01 до 7.59 - ночную тему (темный фон).
;
if ($now_hours >= 8 && $now_hours <= 20)
{
    $time = 'background-light';
} else {
    $time = 'background-night';
}
?>
<link rel="stylesheet" href="styles/styles.css">

<header class="<?php echo $time; ?>">
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
</header>
