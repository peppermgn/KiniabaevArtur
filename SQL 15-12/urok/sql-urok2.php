<?php
$hostname = 'localhost';
$username = 'Artur';
$password = 'Artur';
$dbname = 'mycity';

$dbconnect = mysqli_connect($hostname, $username, $password, $dbname) or die("-");

mysqli_select_db($dbconnect, $dbname);
mysqli_set_charset($dbconnect, 'utf8');

//mysqli_query($dbconnect, "CREATE TABLE People2 (ID_person int NOT NULL AUTO_INCREMENT, Name varchar(50), Surname varchar(50), Age int, PRIMARY KEY (ID_person))");
//mysqli_query($dbconnect, "INSERT INTO `People2`(`ID_person`, `Name`, `Surname`, `Age`) VALUES (null, 'Bob', 'Ivanov', 10)");
//mysqli_query($dbconnect, "INSERT INTO `People2`(`ID_person`, `Name`, `Surname`, `Age`) VALUES (null, 'Sam', 'Petrov', 15)");
//mysqli_query($dbconnect, "INSERT INTO `People2`(`ID_person`, `Name`, `Surname`, `Age`) VALUES (null, 'Alex', 'Sidorov', 20)");
//mysqli_query($dbconnect, "INSERT INTO `People2`(`ID_person`, `Name`, `Surname`, `Age`) VALUES (null, 'Jack', 'Sovetov', 25)");
//mysqli_query($dbconnect, "INSERT INTO `People2`(`ID_person`, `Name`, `Surname`, `Age`) VALUES (null, 'Tom', 'Samsonov', 30)");


//mysqli_query($dbconnect, "CREATE TABLE Hobbies2 (ID_hobbies int NOT NULL AUTO_INCREMENT, Name varchar(50), Description varchar(50), PRIMARY KEY (ID_hobbies))");
//mysqli_query($dbconnect, "INSERT INTO `Hobbies2`(`ID_hobbies`, `Name`, `Description`) VALUES (null, 'Golf', 'Golf Golf Golf Golf Golf Golf')");
//mysqli_query($dbconnect, "INSERT INTO `Hobbies2`(`ID_hobbies`, `Name`, `Description`) VALUES (null, 'Football', 'Football Football Football Football Football')");
//mysqli_query($dbconnect, "INSERT INTO `Hobbies2`(`ID_hobbies`, `Name`, `Description`) VALUES (null, 'Books', 'Books Books Books Books Books Books Books Books')");
//mysqli_query($dbconnect, "INSERT INTO `Hobbies2`(`ID_hobbies`, `Name`, `Description`) VALUES (null, 'Music', 'Music Music Music Music Music Music')");
//mysqli_query($dbconnect, "INSERT INTO `Hobbies2`(`ID_hobbies`, `Name`, `Description`) VALUES (null, 'Dance', 'Dance Dance Dance Dance Dance Dance')");


//mysqli_query($dbconnect, "CREATE TABLE People_hobbies (ID_record int NOT NULL AUTO_INCREMENT, ID_person int, ID_hobbies int, PRIMARY KEY (ID_record), FOREIGN KEY (ID_person) REFERENCES People2(ID_person), FOREIGN KEY (ID_hobbies) REFERENCES Hobbies2(ID_hobbies))");
//mysqli_query($dbconnect, "INSERT INTO `People_hobbies`(`ID_record`, `ID_person`, `ID_hobbies`) VALUES (null, '1', '1')");
//mysqli_query($dbconnect, "INSERT INTO `People_hobbies`(`ID_record`, `ID_person`, `ID_hobbies`) VALUES (null, '2', '2')");
//mysqli_query($dbconnect, "INSERT INTO `People_hobbies`(`ID_record`, `ID_person`, `ID_hobbies`) VALUES (null, '1', '6')");
//mysqli_query($dbconnect, "INSERT INTO `People_hobbies`(`ID_record`, `ID_person`, `ID_hobbies`) VALUES (null, '3', '3')");
//mysqli_query($dbconnect, "INSERT INTO `People_hobbies`(`ID_record`, `ID_person`, `ID_hobbies`) VALUES (null, '4', '1')");
//mysqli_query($dbconnect, "INSERT INTO `People_hobbies`(`ID_record`, `ID_person`, `ID_hobbies`) VALUES (null, '2', '5')");
