<?php

$db = "pakul" ;
$server = 'localhost' ;
$username = 'root';
$password = '';

$conn = mysqli_connect($server, $username, $password,"$db");

if (!$conn){
    die("no connection" . mysqli_connect_error());
}
?>