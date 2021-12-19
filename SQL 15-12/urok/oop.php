<?php
/*require_once 'People.php';

$person = new People( 'Tom', 100);

$person2 = new People('Sam', 200);

$person2->go();

1. Создать класс домашнее животное, в котором объявить
3 поля, 3 метода и 1 конструктор. Создать 2 экземпляра

require_once 'People.php';
$animal = new homeAnimal( 'Васька', 10, 'красный');

$animal2 = new homeAnimal('Барсик', 20, 'синий');

$animal->showName();
$animal->showAge();
$animal->showColor();

$animal2->showName();
$animal2->showAge();
$animal2->showColor();
*/

require_once 'People.php';

$par = new My_parent('Tom', 55);

$child = new My_child('Sam', 15, 'номер 31');
$child->sleep();






