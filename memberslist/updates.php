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
						<form method="POST" action="member.php">
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
$taon = $_POST['taon'];
$sarili = $_POST['sarili'];
$umuupa = $_POST['umuupa'];
$lupa = $_POST['lupa'];
$hanapbuhay = $_POST['hanapbuhay'];
$kita = $_POST['kita'];
$ektarya = $_POST['ektarya'];
$tanim = $_POST['tanim'];
$hayop = $_POST['hayop'];
$ilan = $_POST['ilan'];
$date_join = $_POST['date_join'];
$type = $_POST['type'];
$status = $_POST['status'];



$insertquery= "INSERT INTO seminar (pangalan, edad, barangay, bayan, taon, sarili, umuupa, lupa, hanapbuhay, kita, ektarya, tanim, hayop, ilan, date_join, 'type', 'status')
VALUES('$pangalan', '$edad', '$barangay', '$bayan', '$taon', '$sarili', '$umuupa', '$lupa', '$hanapbuhay', '$kita', '$ektarya', '$tanim', '$hayop', '$ilan', '$date_join', '$type','$status')";



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
										placeholder="Ilagay ang iyong Buong Pangalan" 
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
						
					
               
				
                          <div class="form-group">
                            <span class="form-label">Ilang Taon kana sa kasalukuyang tirahan?</span>
                                    <input class="form-control" 
									type="number" 
									name="taon" 
									value="<?php echo $arrdata['taon']; ?>">
                          </div>

						 
						  <div class="rs-select2 js-select-simple select--no-search">
                            <span class="form-label"> Sariling tahanan mo ba ito?</span>
						<select name="sarili" 
						placeholder="Pumili dito" 
						value="<?php echo $arrdata['sarili']; ?>"
						class="form-control">
						 <option>No data Inserted</option>
							<option value="Sariling Tahanan">Oo</option>
							<option value="Hindi">Hindi</option>
						</select>
						<div class="select-dropdown">
						</div>
								  </div>


                               
							 <div class="rs-select2 js-select-simple select--no-search">
                            <span class="form-label">Kung hindi sa iyo ang tirahan:</span>
                                   
						<select name="umuupa" 
						placeholder="Pumili sa mg Sumusunod" 
						value="<?php echo $arrdata['umuupa']; ?>"
						class="form-control" required>
                        <option>No Data Inserted</option>
							<option value="yes">Umuupa</option>
							<option value="nakikitira">Nakikitira</option>
						</select>
						<div class="select-dropdown"></div>
					</div>
                                 
                                

					<div class="rs-select2 js-select-simple select--no-search">
                            <span class="form-label">Kung sa iyo ang tirahan: Sarili mo ba ang lupang tinatayuan?</span>
                                   
						<select name="lupa" 
						value="<?php echo $arrdata['lupa']; ?>"
						 class="form-control"required>
                     
							<option>No Data Inserted</option>
							<option value="Oo">Oo</option>
							<option value="Hindi">Hindi</option>
						</select>
					</div>
                             
			
					<div class="form-group">
                            <span class="form-label">Ano ang iyong hanapbuhay?</span>
                                    <input class="form-control" 
									type="text" 
									name="hanapbuhay" 
									value="<?php echo $arrdata['hanapbuhay']; ?>"required>
						</div>

				
				
					<div class="form-group">
                            <span class="form-label">Magkano ang regular na kita mo sa isang taon?</span>
                                    <input class="form-control" 
									type="number" 
									name="kita" 
									value="<?php echo $arrdata['kita']; ?>"required>
						</div>


						<div class="form-group">
                            <span class="form-label">Kung ikaw ay nagsasaka, ilang ektarya ang iyong saka?</span>
                                    <input class="form-control" 
									type="text" 
									name="ektarya" 
									value="<?php echo $arrdata['ektarya']; ?>"required>
                          </div>

						  <div class="form-group">
                            <span class="form-label">Ano-ano ang iyong mga tanim?</span>
                                    
						<select name="tanim" 
					class= "form-control"
					value="<?php echo $arrdata['tanim']; ?>"required>
						
                  <option value="Palay">Palay</option>
						<option value="Gulay">Gulay</option>
							<option value="Mais">Mais</option>
							<option value="Iba">Iba pa</option>
						</select>
					</div>

					<div class="form-group">
                            <span class="form-label">May alaga kabang hayop?</span>
                               
						<select name="hayop" 
						class="form-control"
						value="<?php echo $arrdata['hayop']; ?>"required>
						
							<option value="Baka">Baka</option>
							<option value="Kambing">Kambing</option>
							<option value="Kalabaw">Kalabaw</option>
							<option value="Baboy">baboy</option>
						</select>
					</div>

					<div class="form-group">
                            <span class="form-label">Ilan ang iyong alagang hayop?</span>
                                    <input class="form-control" 
									type="number" 
									name="ilan" 
									placeholder="ilagay dito"
									value="<?php echo $arrdata['ilan']; ?>"required>
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
                               
							<div class="form-btn">
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



