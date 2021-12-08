<?php
/*
    $a = array();
    $b = array();

    for($i = 0; $i <= 5; $i++){
        $a[] = mt_rand(1, 10);
    }
    foreach ($a as $item => $value) {
        if ($value % 2 == 0) {
            $b[] = $value;
        }
    }

    print_r($a);
    echo "<pre>";
    var_dump($b);
    echo "</pre>";
*/


/*
$a = 10;
$str = "$a";
$b = (string)$a;
    if($b === $s){
        echo '+';
    }

 */

/*
$arr = ['ананас', 'банан', 'яблоко'];
$str = implode(', ', $arr);

echo "<pre>";
var_dump($arr);
echo "</pre>";

$arr2 = explode('! ' , $str);

echo "<pre>";
var_dump($arr2);
echo "</pre>";
*/

/*$str = "НАДЕЖНЫЙ ВЕБ-ИНТЕГРАТОР ФАКТ!";

echo str_replace(array("НАДЕЖНЫЙ", "ВЕБ-ИНТЕГРАТОР", "ФАКТ"), array("RELIABLE", "WEB-INTAGRATOR", "FACT"), $str);
*/

/*
$str = "FACT";
$arr1 = mb_substr($str, 0, 1);
$arr3 = mb_substr($str, 1);
$arr4 = array($arr1, $arr3);
print_r($arr4);

$arr2 = str_split($str, 3);
print_r($arr2);

*/

// Задача №1

$name = 'fact';
$nameFact = str_replace("fact", "Fact", $name);
echo $nameFact . '</br>' . '</br>';

// Задача №2

$fullName = 'Киньябаев Артур Рамазанович';
$shortName = str_replace("Киньябаев Артур Рамазанович", "Артур Киньябаев", $fullName);
echo $shortName . '</br>'  . '</br>';

// Задача №3

$mir = 'Привет, мир';
$count = str_split($mir);
$numbers = 0;

foreach ($count as $value) {
    if ($value === 'и' or $value === 'И'){
        $numbers++;
    }
}

print_r($numbers);

// Задача №4

$str = 'html css php';
$html = str_replace("html css php", "html", $str);
$css = str_replace("html css php", "css", $str);
$php = str_replace("html css php", "php", $str);
echo $html . '</br>';
echo $css . '</br>';
echo $php . '</br>' . '</br>';

// Задача №5

$str2 = 'name.png';

$short = mb_substr($str2, -4);
    if ($short == '.png') {
        echo 'Да';
    }
    else {
        echo 'Нет';
}
