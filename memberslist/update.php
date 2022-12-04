<?php

//update.php

include('database_connection.php');

$query = "UPDATE 'passbook' SET ".$_POST["Name"]." = '".$_POST["value"]."' 
WHERE id = '".$_POST["pk"]."'
";

$connect->query($query);

?>