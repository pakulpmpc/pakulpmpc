<?php

//update.php

include('database_connection.php');

$query = "UPDATE 'register' SET ".$_POST["pangalan"]." = '".$_POST["value"]."' 
WHERE id = '".$_POST["pk"]."'
";

$connect->query($query);

?>