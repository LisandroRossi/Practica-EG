<?php
$host = "localhost";
$user = "root";         
$pass = "";          
$db = "capitales";

$link = mysqli_connect($host, $user, $pass, $db)
    or die("Error al conectar: " . mysqli_connect_error());
?>