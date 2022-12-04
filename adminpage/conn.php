<?php
	$conn = new mysqli('localhost', 'root', '', 'pakul');
	if(!$conn){
		die('Could not Connect to Database' . $conn->mysqli_error );
	}