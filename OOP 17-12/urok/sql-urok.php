<?php

$hostname = 'localhost';
$username = 'Artur';
$password = 'Artur';
$dbname = 'mycity';

$dbconnect = mysqli_connect($hostname, $username, $password, $dbname);
//var_dump($dbconnect);
mysqli_set_charset($dbconnect, 'utf8');

//mysqli_query($dbconnect, "INSERT INTO `person`(`ID_person`, `Name`, `Age`) VALUES (NULL, 'Artur', 34)");

//$select = mysqli_query($dbconnect, "SELECT * FROM person");
//$arr_select = mysqli_fetch_all($select, MYSQLI_ASSOC);
//echo '<pre>';
//print_r($arr_select);
//echo '<pre>';

$select = mysqli_query($dbconnect, "SELECT name FROM person");
$arr_select = mysqli_fetch_all($select, MYSQLI_ASSOC);
echo '<pre>';
print_r($arr_select);
echo '<pre>';

/*
2. Создать форму, в которой 2 текстовых поля и кнопка.
В текстовые поля вводятся имя и возраст. После отправки данных на сервер, значения сохраняются в бд.
*/



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="sql-urok2.php" method="post">
    <input type="submit">
</form>
</body>
</html>
