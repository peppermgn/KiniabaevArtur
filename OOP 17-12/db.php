<?php
$hostname = 'localhost';
$username = 'Artur';
$password = 'Artur';
$dbname = 'website';

$dbconnect = mysqli_connect($hostname, $username, $password, $dbname);

mysqli_select_db($dbconnect, $dbname);
mysqli_set_charset($dbconnect, 'utf8');
