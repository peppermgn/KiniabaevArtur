<?php
session_start();
$_SESSION['page'] = 'bitrix';
setcookie('page', 'bitrix', time() + 3600 * 24 * 7);

include 'header.php';

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BITRIX</title>
</head>
<body>

<h1>BITRIX</h1>

</body>
</html>






<?
include "footer.php";
?>
