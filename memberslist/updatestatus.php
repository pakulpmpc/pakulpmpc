
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <link rel="icon" type="image/x-icon" href="../userpage/assets/pakul.jpg" />
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<title>ADMIN | UPDATE MEMBER</title>

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
	               height: 200vh;
	               background-position: center;
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
							<h1>UPDATE MEMBERS</h1>
						</div>

						<button onclick="history.back()">Back</button>
						<form method="POST">
						<div class="row">
                        <?php
include 'updatesdb.php';


$ids = $_GET['id'];
$showquery = "SELECT * FROM register WHERE id={$ids}";

$showdata = mysqli_query($con, $showquery);

$arrdata = mysqli_fetch_array($showdata);


if (isset($_POST['submit']))
{
$pangalan = $_POST['pangalan'];
$edad = $_POST['edad'];
$barangay = $_POST['barangay'];
$bayan = $_POST['bayan'];

$date_join = $_POST['date_join'];
$type = $_POST['type'];
$status = $_POST['status'];

$insertquery= "INSERT INTO seminar (pangalan, edad, barangay, bayan, taon, date_join, type, status)
VALUES('$pangalan', '$edad', '$barangay', '$bayan', '$taon', '$date_join', '$type','$status')";



$res = mysqli_query($con, $insertquery);

if($res){
   
    ?>

        <script>
        alert("data updated properly");
        
        </script>
        
        <?php
       
}else{
    ?>
    <script>
         alert("data not inserted");
    </script>
    <?php
}
}
?>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Buong pangalan</span>
										<input class="form-control" 
										type="text" 
										name="pangalan" 
										placeholder="<?php echo $arrdata['pangalan']; ?>" 
										value="<?php echo $arrdata['pangalan']; ?>"required>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Edad</span>
										<input class="form-control"  
									type="text" 
									name="edad"
									placeholder="Ilagay ang iyong Edad"
									value="<?php echo $arrdata['edad']; ?>" required>
									</div>
								</div>
							</div>

							<div class="form-group">
								<span class="form-label">Barangay na aking tinitirahan</span>
                                    <input class="form-control" 
									type="text" 
									name="barangay" 
									placeholder="Ilagay ang barangay na iyong tinitirahan"
									value="<?php echo $arrdata['barangay']; ?>"required>
							</div>
					
						
						<div class="form-group">
								<span class="form-label">Bayan</span>
                                    <input class="form-control" 
									type="text" 
									name="bayan" 
									placeholder="Ilagay ang barangay na iyong tinitirahan"
									value="<?php echo $arrdata['bayan']; ?>"required>
							</div>
						
					
               

						<div class="row">
								<div class="col-sm-6">
						<div class="form-group">
                            <span class="form-label">Date Join</span>
                                    <input class="form-control" 
									type="type" 
									name="date_join" 
									value="<?php echo $arrdata['date_join']; ?>">
						</div>
						</div>
                        <div class="col-sm-6">
						<div class="form-group">
                            <span class="form-label">Members' Type</span>
                                    <input class="form-control" 
									type="text" 
									name="type" 
									value="<?php echo $arrdata['type']; ?>">
						
                        </div>
                        </div>
                        </div>

                        <div class="form-group">
                            <span class="form-label">Status</span>
                               
						<select name="status" 
						class="form-control"
						value="<?php echo $arrdata['type']; ?>">
							<option value="Waiting for Approval">Waiting for Approval</option>
							<option value="Approved">Approved</option>
							<option value="Decline">Decline</option>
							
						</select>
                               <br>
							   <br>
							<div class="form-btn" >
								<button class="submit-btn" name="update" value="Update">UPDATE</button>
							</div>
						
						</form>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>



