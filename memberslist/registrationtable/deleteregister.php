<?php
require 'database.php';

$id = 0;
if (!empty($_GET['id'])) {
$id = $_REQUEST['id'];
}

if ( !empty($_POST)) {
$id = $_POST['id'];

$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "DELETE FROM `register` WHERE id=?";
$query = $pdo->prepare($sql);
$query->execute(array($id));
Database::disconnect();
header("Location: memberstable.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" type="image/x-icon" href="../userpage/assets/pakul.jpg" />

	<title>ADMIN | DELETE REGISTER</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

			<style>
				#booking {
	               font-family: 'Montserrat', sans-serif;
	               background-image: url('img/bg.jpg');
	               background-size: cover;
	               background-position: center;
                          }
                          #yty
                          {
                          	color: white;
                          }
                           #yy
                          {
                          	background-color: red;
                          }
                           #11
                          {
                          	background-color: yellowgreen;
                          }
			</style>

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
						<form method="POST">
							<h1 id="yty">ARE YOU SURE DO YOU WANT TO DELETE THIS RECORDS??</h1>
						</div>
						
						<div class="row">
								<div class="col-sm-12">
									<div class="form-btn">
								<a href="memberstable.php"><button id="11" class="submit-btn" >FORGET AND BACK TO THE TABLE</button></a>
								
							</div>  

							<br><br>
	
						<form method="POST" action="deleteregister.php">

							<div class="row">
								<div class="col-sm-12">
									<div class="form-btn">
										<input type="hidden" name="id" value="<?php echo $id;?>"/>
								<button id="yy" class="submit-btn" type="submit">DELETE THIS RECORD</button>

							</div>
							<br><br>
							
									
									
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>