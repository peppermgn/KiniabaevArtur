<?php
session_start();

include 'header.php';
$hostname = 'localhost';
$username = 'Artur';
$password = 'Artur';
$dbname = 'website';

$dbconnect = mysqli_connect($hostname, $username, $password, $dbname);

mysqli_select_db($dbconnect, $dbname);
mysqli_set_charset($dbconnect, 'utf8');

?>

<h1>АВТОРИЗАЦИЯ</h1>
<form method="post" style="margin: 50px 50px 50px 50px">
    <p> Укажите логин
        <input type="text" name="login" placeholder="Укажите логин">
    </p>
    <p> Введите пароль
        <input type="password" name="psw" placeholder="Введите пароль">
    </p>
    <p><input type="submit"></p>

    <div>
        <p>У Вас нет аккаунта? <a href="/register.php">РЕГИСТРАЦИЯ</a></p>
    </div>

    <?php
    require ('authorization.php');
    $data = new authorization($_POST['login'], $_POST['psw']);
    $data->userAuth();
    ?>
</form>

<?
include "footer.php";
?>
