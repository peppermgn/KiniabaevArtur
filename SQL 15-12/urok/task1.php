<?php
session_start();
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
<p>Сколько будет 2 + 2:</p>
<form action="task2.php" method="post">
    <input type="text" name="answer">
    <input type="submit">
</form>
<a href="task2.php">Следующая задача</a>
</body>
</html>