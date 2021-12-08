<?php
session_start();
$_SESSION['task3Answer'] = $_POST['answer'];
echo 'Ответ задачи №1: ' . $_SESSION['task1Answer'] . "</br>";
echo 'Ответ задачи №2: ' . $_SESSION['task2Answer'] . "</br>";
echo 'Ответ задачи №3: ' . $_SESSION['task3Answer'] . "</br></br>";

$num = 0;

if ($_SESSION['task1Answer'] == 4){
    $num++;
} else {
    echo 'Не правильный ответ в задаче №1' . "</br></br>";
}

if ($_SESSION['task2Answer'] == 6){
    $num++;
} else {
    echo 'Не правильный ответ в задаче №2' . "</br></br>";
}

if ($_SESSION['task3Answer'] == 2){
    $num++;
} else {
    echo 'Не правильный ответ в задаче №3' . "</br></br>";
}

echo 'Всего баллов: ' . $num . "</br>";