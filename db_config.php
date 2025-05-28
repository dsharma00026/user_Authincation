<?php

//here we connect our project with database sql using pdo class
$host = "localhost";
$user   = "root";
$pass = null;
$db_name = "userdb";

$con =new PDO("mysql:host=$host;dbname=$db_name",$user,$pass);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>
