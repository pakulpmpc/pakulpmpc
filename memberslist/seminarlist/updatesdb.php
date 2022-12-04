<?php

$db = 'pakul' ;
$server = 'localhost' ;
$username = 'root';
$password = '';

$con = mysqli_connect($server, $username, $password,$db);

if ($con){
    ?>

    <script>
        alert("Connected Successfully");
        </script>
    <?php
}else{
    die("no connection" . mysqli_connect_error());
}
?>