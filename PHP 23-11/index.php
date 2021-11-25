<?php

$now_hours = date("H");
$now_minuts = date("i");
var_dump($now_hours);
var_dump($now_minuts);

//Необходимо подгружать на страницу с 8 до 20.00 - дневная тема (светлый цвет) и с 20.01 до 7.59 - ночную тему (темный фон).


if ($now_hours >= 8 && $now_hours <= 20)
{
    $time = 'background-light';
} else {
    $time = 'background-night';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>Document</title>
</head>
<body class="body">
<header class="<?php echo $time; ?>">
        <span class="header-grid">
            <div class="img-logo">
                <img src="/img/logo.png" alt="My logo" title="My logo">
            </div>
            <div>
                <nav>
                    <a href="table.html" target="_blank">Таблица</a>
                </nav>
            </div>
            <div class="time">
                Текущее время:
                <?php
                echo ("$now_hours");
                ?>
            </div>
</header>

<main class="main-<?php echo $time; ?>">

    <div class="main-grid">
        <div class="main-image">
            <img class="main-photo" src="/img/photo.jpg" alt="My photo" title="My photo">
        </div>
        <div class="main-name">
            <h2>Киньябаев Артур</h2>
        </div>
        <div class="main-hobby">
            <h3>Увлечения</h3>
            <p>Увлечений не так уж и много: люблю воллейбол, компьютерные игры, хорошие фильмы. Сериалы особо не смотрю, потому что может затянуть и вообще забью на все остальное))</p>
        </div>
        <div class="main-reviews">
            <h3>Что понравилось</h3>
            <p>Нравится, что наконец то начался хардкор, меньше болтаем и больше делаем) </p>
        </div>
    </div>


    <div class="eu1-grid <?php echo $time; ?>" >
        <div class="box box1">
            <div class="img-block"><img src="/img/eu1.jpg" alt="eu1" title="eu1"></div>
            <br>
            <br>
            <div class="text-block">Эублефары умеют моргать, подмигивать и даже строить глазки. Мало кто может устоять перед этим завораживающим умным взглядом. И всё это потому, что эублефары имеют подвижное веко, которое отсутствует у других гекконов. Само слово «эублефар» означает «имеющий веко».
            </div>
        </div>
        <div class="box box2 light">
            <div class="img-block"><img src="/img/eu2.jpg" alt="eu2" title="eu2"></div>
            <br>
            <br>
            <div class="text-block">Эублефары умеют улыбаться. У них очень своеобразная мимика и при длительном общении вы начинаете понимать, когда эублефар доволен. Это легко читается по большой широкой улыбке на счастливой мордочке.
            </div>
        </div>
        <div class="box box3">
            <div class="img-block"><img src="/img/eu3.jpg" alt="eu3" title="eu3"></div>
            <br>
            <br>
            <div class="text-block">У эублефаров нежная бархатистая кожа, особенно, на шее. Они совсем не склизкие, а наоборот, очень приятные на ощупь. Поэтому их очень приятно держать в руках. На теле у эублефаров присутствуют «пупырышки», что делает их кожу еще более интересной.
            </div>
        </div>
        <div class="box box4 light">
            <div class="img-block"><img src="/img/eu4.jpg" alt="eu4" title="eu4" style="position: center"></div>
            <br>
            <br>
            <div class="text-block">Взрослые эублефары имеют шикарные толстые хвосты, куда они откладывают жировые запасы, словно верблюды в горбы. Это служит им источником еды и воды в тяжелые времена и позволяет выживать в условиях сильной засухи.</div>
        </div>
    </div>

    <div class="container-grid <?php echo $time; ?>">
        <div class="grid-block-one">
            <div class="grid-photo"><img src="/img/eu5.jpg" alt="eu5" title="eu5" style="position: center"></div>
            <br>
            <br>
            <div class="grid-text">Эублефары очень любят общение с людьми. В отличие от многих других рептилий эублефары очень быстро привыкают у человеку и охотно идут на контакт. Многие сами буквально просятся «на ручки». Им нравится человеческое тепло и они любят погреть пузико на ладошке или посидеть на плече у хозяина.</div>
        </div>
        <div class="grid-block-two">
            <div class="grid-photo"><img src="/img/eu6.jpg" alt="eu6" title="eu6" style="position: center"></div>
            <br>
            <br>
            <div class="grid-text">Взрослые эублефары имеют шикарные толстые хвосты, куда они откладывают жировые запасы, словно верблюды в горбы. Это служит им источником еды и воды в тяжелые времена и позволяет выживать в условиях сильной засухи.</div>
        </div>
        <div class="grid-block-three">
            <div class="grid-photo"><img src="/img/eu7.jpg" alt="eu7" title="eu7" style="position: center"></div>
            <br>
            <br>
            <div class="grid-text">Если взять домашнего эублефара за хвост, то он не отбросит его, как дикая ящерица. Всё это потому, что хвост ящерицы сбрасывают только в случае сильного испуга, острой боли или же для того, чтобы отделаться от преследователей. А так как в домашних условиях человек не предоставляет угрозы, и даже наоборот, является для эублефаров источником тепла, радости и питания, то он может смело взять эублефара за хвост. Конечно, мы не призываем таскать эублефара за хвост, но факт остается фактом.</div>
        </div>
        <div class="grid-block-four">
            <div class="grid-photo"><img src="/img/eu8.jpg" alt="eu8" title="eu8" style="position: center"></div>
            <br>
            <br>
            <div class="grid-text">Эублефары не ночные животные, а сумеречные. Они наиболее активны рано утром на расходе солнца и вечером. Когда хозяева собираются на работу, и когда возвращаются домой эублефары готовы к общению. Ночью и днем эублефары предпочитают отдыхать. Впрочем, они легко могут подстраиваться под ритм человека и будут наиболее активны тогда, когда их кормят и общаются с ними.</div>
        </div>

    </div>
</main>

<footer class="footer <?php echo $time; ?>">
    <div class="grid-footer">
        <div class="vk">
            <a href="https://vk.com/id12536654" target="_blank">Вконтакте</a>
        </div>
        <div class="fb">
            <a href="https://www.facebook.com/arturkinyabaev" target="_blank">Facebook</a>
        </div>
        <div class="insta">
            <a href="https://www.instagram.com/peppermgn/" target="_blank">Instagram</a>
        </div>
    </div>
</footer>
</body>
</html>