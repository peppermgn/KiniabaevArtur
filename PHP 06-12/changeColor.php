<?php
$bgColor = $_POST['color'];
echo $bgColor;
setcookie('bg_color', $bgColor, time() + 3600 * 24 * 7);

header('Location: index.php');
