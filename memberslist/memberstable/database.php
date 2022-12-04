<?php

//database_connection.php

$conn = new mysqli("localhost", "root","","pakul");

if ($conn->connect_error) {
    die("Connection Failed" .$conn->connect-error);
} 


?>
