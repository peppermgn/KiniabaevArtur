<?php
session_start();
session_destroy();

?>

<p>Чтобы очистить сессию - обновите страницу</p>

<?php
print_r($_SESSION);
?>