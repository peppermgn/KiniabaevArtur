<?php
    print_r($_POST);
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
<!--
<form method="post">
    <p>
        <input type="text" name="name" placeholder="name">
    </p>
    <p>
        <textarea rows="10" cols="40" name="comment"></textarea>
    </p>

    <p><input name="radio" type="radio"> Один</p>
    <p><input name="radio" type="radio"> Два</p>
    <p>
        <input type="checkbox" name="checkbox">Five<Br>
        <input type="checkbox" name="checkbox">Six<Br>
    </p>
    <p><input type="submit"></p>
</form>

<form method="post">
    <select name="lab">
        <option value="1">Лаб1</option>
        <option value="2">Лаб2</option>
        <option value="3">Лаб3</option>
        <option value="4">Лаб4</option>
    </select>
    <p><input type="submit"></p>
    
    <p><a href="phpcourse.php?l=<?php echo $_POST[lab]?>">phpcourse.php?l=<?php echo $_POST[lab]?></a></p>
</form>
<form method="post">
    <p>
        <input type="text" name="login" placeholder="name">
    </p>
    <p>
        <textarea rows="10" cols="40" name="comment"></textarea>
    </p>
    <p><input type="submit"></p>
    <?php
    mail('receiver@example.com', 'Тема письма', $_POST[comment], $_POST[login]);
    ?>
</form>


<form method="post">
    <p>
        <input type="text" name="login" placeholder="name">
    </p>
    <p>
        <input type="text" name="psw" placeholder="psw">
    </p>
    <p><input type="submit"></p>

    <?php
    echo md5($_POST[psw]);
    ?>
</form>
--!>

<form method="post">
    <p>
        <input type="text" name="login" placeholder="name">
    </p>

    <div> Вопрос №1:
        <p><input name="questions1" type="radio" value="1" checked> Один</p>
        <p><input name="questions1" type="radio" value="2"> Два</p>
    </div>
    <div> Вопрос №2:
        <p><input name="questions2" type="radio" value="1" checked> Один</p>
        <p><input name="questions2" type="radio" value="2"> Два</p>
    </div>
    <div> Вопрос №3:
        <p><input name="questions3" type="radio" value="1" checked> Один</p>
        <p><input name="questions3" type="radio" value="2"> Два</p>
    </div>
    <div> Вопрос №4:
        <p><input name="questions4" type="radio" value="1" checked> Один</p>
        <p><input name="questions4" type="radio" value="2"> Два</p>
    </div>
    <div> Вопрос №5:
        <p><input name="questions5" type="radio" value="1" checked> Один</p>
        <p><input name="questions5" type="radio" value="2"> Два</p>
    </div>
    <div> Вопрос №6:
        <p><input name="questions6" type="radio" value="1" checked> Один</p>
        <p><input name="questions6" type="radio" value="2"> Два</p>
    </div>
    <div> Вопрос №7:
        <p><input name="questions7" type="radio" value="1" checked> Один</p>
        <p><input name="questions7" type="radio" value="2"> Два</p>
    </div>
    <div> Вопрос №8:
        <p><input name="questions8" type="radio" value="1" checked> Один</p>
        <p><input name="questions8" type="radio" value="2"> Два</p>
    </div>
    <div> Вопрос №9:
        <p><input name="questions9" type="radio" value="1" checked> Один</p>
        <p><input name="questions9" type="radio" value="2"> Два</p>
    </div>
    <div> Вопрос №10:
        <p><input name="questions10" type="radio" value="1" checked> Один</p>
        <p><input name="questions10" type="radio" value="2"> Два</p>
    </div>

    <p><input type="submit"></p>

    <?php

    $userRaiting = 0;

    if ($_POST['questions1'] == 1 or $_POST['questions4'] == 1 or $_POST['questions5'] == 1 or $_POST['questions7'] == 1 or $_POST['questions9'] == 1) {
        $userRaiting++;
    } elseif ($_POST['questions2'] == 2 or $_POST['questions3'] == 2 or $_POST['questions6'] == 2 or $_POST['questions8'] == 2 or $_POST['questions10'] == 2){
        $userRaiting++;
    }

    echo $userRaiting;

    ?>
</form>
</body>
</html>
