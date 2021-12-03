<?php

/*Задача №1

function f ($x, $y) {
    if ($x > $y){
        return $x;
    }
    else {
        return $y;
    }
}

f(2, 5);

// Задача №2

function gipo ($catet1, $catet2){
    $gipo = sqrt(($catet1 ** 2) + ($catet2 ** 2));
    echo $gipo . "</br>";
}

gipo (20,50);
// Задача №3

function mln ($x){
    while ($x >= 1000000); {
        $x = $x * 10;
        echo $x . "</br>";
    }
    echo "<br> Мы достигли лимита";
}

mln (10);*/

// Задача №4

function massiv ($x){
    $arr = [];
    for ($x = 0; $x < 5; $x++){
        $arr[] = mt_rand(0,100);
    }
    echo($arr);
}
massiv(1);

// Задача №5

function massiv2 ($y){
    $sum = array_sum ($y) / count($y);
    return $sum;
}
$z = [5, 10, 44, 57];
massiv2($z);


// Задача №6

function str3 ($q) {
     $ttt = str_word_count($q);
    echo $ttt;
}

$t = "Привет мир!";
str3 ($t);