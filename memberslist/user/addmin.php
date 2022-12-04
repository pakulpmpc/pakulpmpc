<?php
require '../database.php';

if (!empty($_POST))
{
$fullnameError = null;
$phoneError = null;
$addressError = null;
$usernameError = null;
$passwordError = null;
$usertypeError = null;
$tinidError = null;


$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$username = $_POST['username'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];
$tinid = $_POST['tinid'];



$valid = true;
if (empty($username)) {
$usernameError = 'Please enter your Firstname';
$valid = false;
}
if ($valid) {
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO users (fullname, phone, address, username, password, usertype, tinid) values (?, ?, ?,?,?, ?,?)";
$query = $pdo->prepare($sql);
$query->execute(array($fullname, $phone, $address, $username, $password, $usertype, $tinid));

Database::disconnect();
header("Location: addmin.php");

}
}

?>
<!DOCTYPE html>
<html lang="en">


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../../userpage/assets/pakul.jpg" />

	<title>ADMIN | ADD USER / ADMIN</title>
      <link rel="stylesheet" href="../../css1.css">
</head>
  <body>

	<div class="wrapper">
        <div class="logo">
            <img src="../../logo.jpg" alt="">
        </div>
        <center>
        <div class="text-center mt-4 name">
            Welcome to PMPC
        </div>

		<script type="text/javascript">
function valid()
{
 if(document.registration.password.value!= document.registration.password_again.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.password_again.focus();
return false;
}
return true;
}
</script>
		

	</head>

	<body class="login">
		<!-- start: REGISTRATION -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../index.html"> 
              <h3>  User Registration</h3>
        </div></a>
				</div>
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<form name="registration" id="registration"  method="post" onSubmit="return valid();">
						<fieldset>
</br>
							<legend>
								Add User | Admin
							</legend>

                            <div class="form-group">
								<span class="input-icon">
									<input type="number" class="form-control" name="tinid" id="tinid" onBlur="userAvailability()"  placeholder="Tin ID" required>
									<i class="fa fa-envelope"></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
							
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="fullname" id="fullname" onBlur="userAvailability()"  placeholder="FULLNAME" required>
									<i class="fa fa-envelope"></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="phone" id="phone" onBlur="userAvailability()"  placeholder="PHONE NUMBER" required>
									<i class="fa fa-envelope"></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="address" id="address" onBlur="userAvailability()"  placeholder="ADDRESS" required>
									<i class="fa fa-envelope"></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
							
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" id="username" onBlur="userAvailability()"  placeholder="USERNAME" required>
									<i class="fa fa-envelope"></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>

							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password" name="password" placeholder="PASSWORD" required>
									<i class="fa fa-lock"></i> </span>
							</div>

							<div class="form-group">
								<select id="usertype" name="usertype"required>
        <option value="" disabled selected hidden >Usertype</option>
        <option>user</option>
        <option>admin</option>

    </select>
									<i class="fa fa-lock"></i> </span>
							</div>

							<div class="form-group">
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="agree" value="agree" checked="true" readonly=" true">
									<label for="agree">
										I agree
									</label>
								</div>
							</div>
							<div class="form-actions">
								<p>
									Already have an account?
									<a href="index.php">
										Log-in
									</a>
								</p>
</br>

<button type="submit" class="btn btn-secondary pull-right" id="submit" name="submit" style="background-color: #008CBA;">
Submit <i class="fa fa-arrow-circle-right"></i>
									</button>
							</div>
						</fieldset>
					</form>


				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
		
	</body>
	<!-- end: BODY -->
</html>