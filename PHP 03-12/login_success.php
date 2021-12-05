<?php
session_start();
include 'header.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация прошла успешно</title>
</head>
<body>
<h1><?php echo $_SESSION['login'];?> , Вы успешно авторизовались. Отправьте нам сообщение:</h1>
<form method="post" style="margin: 50px 50px 50px 50px">
    <p>
        <textarea rows="10" cols="40" name="comment">Укажите Ваш комментарий</textarea>
    </p>
    <p><input type="submit"></p>
   <?php
   mail('receiver@example.com', 'Тема письма', $_POST[comment], $_SESSION['login']);
   ?>
</form>
</body>
</html>

<?
include "footer.php";
?>
