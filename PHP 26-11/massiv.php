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
<body>
<?php
include 'header.php';

?>
<main class="main-<?php echo $time; ?>">
<h2>Задание №1</h2>

<?php
// Задание №1

    $n = [];

    for($i = 0; $i <= 10; $i++){
        $n[] = mt_rand(1, 20);
    }
    foreach ($n as $item => $value) {
        if ($value % 2 == 0) {
            echo "<div style='font-weight: bold'>Value: $value.</div><br>";
        }
        else echo "Value: $value. <br>";
    }
?>

<h2>Задание №2</h2>

<?php
// Задание №2

$word = array(
        'Города' => array('Архангельск', 'Москва', 'Казань', 'Астана'),
        'Страны' => array('Афганистан', 'Казахстан', 'Аргентина', 'Россия'),
        );
    foreach ($word as $skey => $town) {
        foreach ($town as $city) {
            if (mb_substr($city, 0, 1) === "А")
                echo $city . "<br/>";
            else
                echo "<br/>";
        }
}
?>
<h2>Задание №3</h2>
<?php
// Задание №3

$numbers = array(
    'До 10' => array(1, 5, 7, 9),
    'До 20' => array(12, 14, 18, 20),
    );

    echo count($numbers, COUNT_RECURSIVE) . "<br/>";
    echo count($numbers['До 10']) . "<br/>";//0
    echo count($numbers['До 20']) . "<br/>";//0




?>
</main>
</body>

<?
include "footer.php";
?>
</html>