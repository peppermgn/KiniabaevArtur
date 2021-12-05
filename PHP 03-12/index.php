<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Document</title>
</head>
<body class="body">

<?php
include 'header.php';
?>


<?php
// Количество дней с момента рождения до сегодняшнего дня
function daysFromBirthday (){
    $daysAfterBirthday = date_diff(new \DateTime(), new \DateTime('1987-06-05'))->days;
    echo $daysAfterBirthday;
}

// Всего слов на странице
function wordCount ($a, $b, $c, $d, $e, $f) {
    $wordCount = (explode(" ", strip_tags($a))) + (explode(" ", strip_tags($b))) + (explode(" ", strip_tags($c))) + (explode(" ", strip_tags($d))) + (explode(" ", strip_tags($e))) + (explode(" ", strip_tags($f)));
    echo count($wordCount);
}

// Количество гласных букв
function vowelsCount ($z){
    $vowelsCount = strlen(implode( '', preg_replace('/[^бвгджзйклмнпрстфхцчшщБВГДЖЗЙКЛМНПРСТФХЦЧШЩ]/', '', $z)));
    echo $vowelsCount;
}

// Покраска четных и не четных слов

function reviewTextColor($x) {
    $textReviewsMainArray = explode(' ', $x);
    foreach ($textReviewsMainArray as $item => $value){
        ($item % 2 ===0) ? $textReviewsMainArray[$item] = "<span style='color: red'> $value</span>" : $textReviewsMainArray[$item] = "<span style='color: blue'> $value</span>";
    }
    $reviews11 = implode(' ', $textReviewsMainArray);
    echo $reviews11;
}
?>

<main class="main-<?php echo $time; ?>">
    <div class="main-grid">
        <div class="main-image">
            <img class="main-photo" src="img/photo.jpg" alt="My photo" title="My photo">
        </div>
        <div class="main-name">
            <?php
            $textMainName = '<h2>Киньябаев Артур</h2>';
            echo $textMainName;
            ?>
        </div>
        <div class="main-hobby" id="functionMain">
            <?php
            $textHobbyName = '<h3>Увлечения</h3>';
            echo $textHobbyName;
            $textHobbyMain = '<p>Увлечений не так уж и много: люблю воллейбол, компьютерные игры, хорошие фильмы. Сериалы особо не смотрю, потому что может затянуть и вообще забью на все остальное))</p>';
            echo $textHobbyMain;
            ?>
        </div>
        <div class="main-reviews">
            <?php
            $textReviewsName = '<h3>Что понравилось</h3>';
            echo $textReviewsName;

            $textReviewsMain = '<p>Нравится, что наконец то начался хардкор, меньше болтаем и больше делаем) </p>';
            reviewTextColor ($textReviewsMain);
            ?>
        </div>
    </div>
    <?php
    $text = '<div class="eu1-grid ' . $time . '" >
        <div class="box box1">
            <div class="img-block"><img src="img/eu1.jpg" alt="eu1" title="eu1"></div>
            <br>
            <br>
            <div class="text-block">Эублефары умеют моргать, подмигивать и даже строить глазки. Мало кто может устоять перед этим завораживающим умным взглядом. И всё это потому, что эублефары имеют подвижное веко, которое отсутствует у других гекконов. Само слово «эублефар» означает «имеющий веко».
            </div>
        </div>
        <div class="box box2 light">
            <div class="img-block"><img src="img/eu2.jpg" alt="eu2" title="eu2"></div>
            <br>
            <br>
            <div class="text-block">Эублефары умеют улыбаться. У них очень своеобразная мимика и при длительном общении вы начинаете понимать, когда эублефар доволен. Это легко читается по большой широкой улыбке на счастливой мордочке.
            </div>
        </div>
        <div class="box box3">
            <div class="img-block"><img src="img/eu3.jpg" alt="eu3" title="eu3"></div>
            <br>
            <br>
            <div class="text-block">У эублефаров нежная бархатистая кожа, особенно, на шее. Они совсем не склизкие, а наоборот, очень приятные на ощупь. Поэтому их очень приятно держать в руках. На теле у эублефаров присутствуют «пупырышки», что делает их кожу еще более интересной.
            </div>
        </div>
        <div class="box box4 light">
            <div class="img-block"><img src="img/eu4.jpg" alt="eu4" title="eu4" style="position: center"></div>
            <br>
            <br>
            <div class="text-block">Взрослые эублефары имеют шикарные толстые хвосты, куда они откладывают жировые запасы, словно верблюды в горбы. Это служит им источником еды и воды в тяжелые времена и позволяет выживать в условиях сильной засухи.</div>
        </div>
    </div>

    <div class="container-grid ' . $time . '">
        <div class="grid-block-one">
            <div class="grid-photo"><img src="img/eu5.jpg" alt="eu5" title="eu5" style="position: center"></div>
            <br>
            <br>
            <div class="grid-text">Эублефары очень любят общение с людьми. В отличие от многих других рептилий эублефары очень быстро привыкают у человеку и охотно идут на контакт. Многие сами буквально просятся «на ручки». Им нравится человеческое тепло и они любят погреть пузико на ладошке или посидеть на плече у хозяина.</div>
        </div>
        <div class="grid-block-two">
            <div class="grid-photo"><img src="img/eu6.jpg" alt="eu6" title="eu6" style="position: center"></div>
            <br>
            <br>
            <div class="grid-text">Взрослые эублефары имеют шикарные толстые хвосты, куда они откладывают жировые запасы, словно верблюды в горбы. Это служит им источником еды и воды в тяжелые времена и позволяет выживать в условиях сильной засухи.</div>
        </div>
        <div class="grid-block-three">
            <div class="grid-photo"><img src="img/eu7.jpg" alt="eu7" title="eu7" style="position: center"></div>
            <br>
            <br>
            <div class="grid-text">Если взять домашнего эублефара за хвост, то он не отбросит его, как дикая ящерица. Всё это потому, что хвост ящерицы сбрасывают только в случае сильного испуга, острой боли или же для того, чтобы отделаться от преследователей. А так как в домашних условиях человек не предоставляет угрозы, и даже наоборот, является для эублефаров источником тепла, радости и питания, то он может смело взять эублефара за хвост. Конечно, мы не призываем таскать эублефара за хвост, но факт остается фактом.</div>
        </div>
        <div class="grid-block-four">
            <div class="grid-photo"><img src="img/eu8.jpg" alt="eu8" title="eu8" style="position: center"></div>
            <br>
            <br>
            <div class="grid-text">Эублефары не ночные животные, а сумеречные. Они наиболее активны рано утром на расходе солнца и вечером. Когда хозяева собираются на работу, и когда возвращаются домой эублефары готовы к общению. Ночью и днем эублефары предпочитают отдыхать. Впрочем, они легко могут подстраиваться под ритм человека и будут наиболее активны тогда, когда их кормят и общаются с ними.</div>
        </div>
    </div>
</main>';
    echo $text;
    ?>

    <?php

    $wordCount = (explode(" ", strip_tags($textMainName))) + (explode(" ", strip_tags($textHobbyName))) + (explode(" ", strip_tags($textHobbyMain))) + (explode(" ", strip_tags($textReviewsName))) + (explode(" ", strip_tags($textReviewsMain))) + (explode(" ", strip_tags($text))) ;

    vowelsCount ($wordCount);
    echo ': количество гласных букв на странице' . '</br>';

    wordCount($textMainName, $textHobbyName, $textHobbyMain, $textReviewsName, $textReviewsMain, $text);
    echo ' : всего слов на странице' . '</br>';

    daysFromBirthday();
    echo ' : количество дней с даты рождения';

    ?>

    <?
    include "footer.php";
    ?>

</body>
</html>