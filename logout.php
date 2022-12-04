<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="userpage/assets/pakul.jpg" />

	<title>USER | LOG OUT</title>
      <link rel="stylesheet" href="css1.css">
</head>
<body>

	<div class="wrapper">
        <div class="logo">
            <img src="logo.jpg" alt="">
        </div>
        <center>
        <div class="text-center mt-4 name">
           LOGGING OUT IN THE SYSTEM
        </div>

    
            <br> <br>
            <a href="index.php"><button class="btn mt-3">CONFIRM</button></a>
            <button onclick="history.back()">Go Back</button>
            </center>
       </form>
        
    </div>
</html>