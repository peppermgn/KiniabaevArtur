<?php

session_start();
$_SESSION['user'] = $_POST['name'];
$_SESSION['count'] = 0;

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
Hello!
<form action="" method="post">
    <input type="text" name="name">
    <input type="submit">
</form>
<a href="sql-urok.php">1</a>
</body>
</html>
