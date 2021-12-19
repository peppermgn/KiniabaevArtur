<?php
include 'header.php';

$login = $_POST['login'];
$psw = md5($_POST['psw']);
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];

$file = fopen("users.txt", "at");
fwrite($file, "\n $login:$psw:$name:$surname:$email \n");
fclose($file);

?>

<h1>РЕГИСТРАЦИЯ</h1>
<form method="post" style="margin: 50px 50px 50px 50px; align-content: center">
    <p> Укажите логин:
        <input type="text" name="login" placeholder="Укажите логин">
    </p>
    <p> Введите пароль:
        <input type="text" name="psw" placeholder="Введите пароль">
    </p>
    <p>Укажите ИМЯ:
        <input type="text" name="name" placeholder="Укажите Имя">
    </p>
    <p> Укажите ФАМИЛИЮ:
        <input type="text" name="surname" placeholder="Укажите Фамилию">
    </p>
    <p> Укажите EMAIL:
        <input type="text" name="email" placeholder="Укажите Email">
    </p>
    <p><input type="submit"></p>

    <div><a href="/auth.php">АВТОРИЗАЦИЯ</a></div>

    <?php
    print_r($_POST)
    ?>
</form>


<?
include "footer.php";
?>