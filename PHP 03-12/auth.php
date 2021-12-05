<?php
session_start();

include 'header.php';
?>

<h1>АВТОРИЗАЦИЯ</h1>
<form method="post" style="margin: 50px 50px 50px 50px">
    <p> Укажите логин
        <input type="text" name="login" placeholder="Укажите логин">
    </p>
    <p> Введите пароль
        <input type="text" name="psw" placeholder="Введите пароль">
    </p>
    <p><input type="submit"></p>

    <div>
        <p>У Вас нет аккаунта? <a href="/register.php">РЕГИСТРАЦИЯ</a></p>
    </div>

    <?php
    $login = $_POST['login'];
    $psw = $_POST['psw'];
    $_SESSION['login'] = $login;

/* $data = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
 $users = [];
 foreach ($data as $item) {
     list($login, $password, $name, $lastName, $email) = explode(':', $item);
     $users[] = [
             'login' => $login,
             'password' => $password,
             'name' => $name,
             'lastName' => $lastName,
             'email' => $email,
     ];
 }
 print_r($users);
 */

     if ($login == 'admin' && $psw == '123') {
         header("Location: login_success.php");
         }
     else{
             echo 'Не правильный логин/пароль';
     }
 ?>
</form>

<?
include "footer.php";
?>