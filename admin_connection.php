<?php

$dbhost ="localhost";
$dbuser ="root";   //default user
$dbpass ="";
$dbname ="schooldatabase";    //name of database you created on xampp server

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to connect!!");
}


?>
