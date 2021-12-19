<?php

class authorization
{
    public $login;
    private $psw;

    public function __construct($login, $psw) {
        $this->login = $login;
        $this->psw = $psw;
    }

    public function userAuth()
    {
        require ('db.php');
        if (isset($_POST['login']) && ($_POST['psw'])) {
            $login = $_POST['login'];
            $psw = $_POST['psw'];

            $querry = "SELECT * FROM users WHERE login = '$login' and password = '$psw'";
            $result = mysqli_query($dbconnect, $querry) or die ("-");
            $count = mysqli_num_rows($result);

            if ($count == 1) {
                $_SESSION['login'] = $login;
            } else {
                $mssg = 'Ошибка';
            }
        }
        if (isset($_SESSION['login'])) {
            $login = $_SESSION['login'];
            echo "Привет " . $login . "</br>";
            echo "Вы вошли";
        }

        if ($login == 'admin') {
            header("Location: login_success.php");
        }
    }
}