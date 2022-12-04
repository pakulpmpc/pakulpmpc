<?php
require 'userpage/database.php';
session_start();
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
$sql = "INSERT INTO userask (fullname, phone, address, username, password, usertype, tinid) values (?, ?, ?,?,?, ?,?)";
$query = $pdo->prepare($sql);
$query->execute(array($fullname, $phone, $address, $username, $password, $usertype, $tinid));

Database::disconnect();
header("Location: index.php");

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
    <link rel="icon" type="image/x-icon" href="userpage/assets/pakul.jpg" />

	<title>USER | SIGN UP</title>  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css1.css">

</head>

  <body>

	<div class="wrapper">
        <div class="logo">
            <img src="logo.jpg" alt="">
        </div>
        <center>
        <div class="text-center mt-4 name">
            Welcome to PMPC
        </div>

		
		

	</head>

	<body class="login">
		<!-- start: REGISTRATION -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="login.php"> 
          
        </div></a>
				</div>
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<form name="registration" id="registration"  method="post" onSubmit="return valid();">
						<fieldset>
</br>
							<legend>
								Sign Up
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
							<center>
                <div>


                
            </div></center>
							<div class="form-group">
								<select id="usertype" name="usertype"required>
        <option value="" disabled selected hidden >Usertype</option>
        <option>user</option>
    </select>
									<i class="fa fa-lock"></i> </span>
							</div>
							<br>
<div class="form-group">  
 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
   Terms and Condition
  </button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Terms and Condition</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	  <h2><strong>Terms and Conditions</strong></h2>

<p>Welcome to Pakul Primary Multi-Purpose Cooperative Membership Management System!</p>

<p>These terms and conditions outline the rules and regulations for the use of Pakul Primary Multi-Purpose Cooperative's Website, office located at Pakul Jaen Nueva Ecija.</p>

<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use Pakul Primary Multi-Purpose Cooperative Membership Management System if you do not agree to take all of the terms and conditions stated on this page.</p>

<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>

<h3><strong>Cookies</strong></h3>

<p>We employ the use of cookies. By accessing Pakul Primary Multi-Purpose Cooperative Membership Management System, you agreed to use cookies in agreement with the Pakul Primary Multi-Purpose Cooperative's Privacy Policy. </p>

<p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>

<h3><strong>License</strong></h3>

<p>Unless otherwise stated, Pakul Primary Multi-Purpose Cooperative and/or its licensors own the intellectual property rights for all material on Pakul Primary Multi-Purpose Cooperative Membership Management System. All intellectual property rights are reserved. You may access this from Pakul Primary Multi-Purpose Cooperative Membership Management System for your own personal use subjected to restrictions set in these terms and conditions.</p>

<p>You must not:</p>
<ul>
    <li>Republish material from Pakul Primary Multi-Purpose Cooperative Membership Management System</li>
    <li>Sell, rent or sub-license material from Pakul Primary Multi-Purpose Cooperative Membership Management System</li>
    <li>Reproduce, duplicate or copy material from Pakul Primary Multi-Purpose Cooperative Membership Management System</li>
    <li>Redistribute content from Pakul Primary Multi-Purpose Cooperative Membership Management System</li>
</ul>

<p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the <a href="https://www.termsandconditionsgenerator.com/">Free Terms and Conditions Generator</a>.</p>

<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Pakul Primary Multi-Purpose Cooperative does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of Pakul Primary Multi-Purpose Cooperative,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, Pakul Primary Multi-Purpose Cooperative shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>

<p>Pakul Primary Multi-Purpose Cooperative reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>

<p>You warrant and represent that:</p>

<ul>
    <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
    <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
    <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
    <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
</ul>

<p>You hereby grant Pakul Primary Multi-Purpose Cooperative a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>

<h3><strong>Disclaimer</strong></h3>

<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>

<ul>
    <li>limit or exclude our or your liability for death or personal injury;</li>
    <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
    <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
    <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
</ul>

<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>

<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

							<div class="form-group">
								<div class="checkbox clip-check check-primary">
									<br><input type="checkbox" id="agree" value="agree" checked="true" readonly=" true" required><label for="agree">
										I have read and agreed to the terms and condition
									</label>
</input>
								</div>
							</div>
							<br>
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
function toggleVisibility() {  
  var getPasword = document.getElementById("password");  
  if (getPasword.type === "password") {  
    getPasword.type = "text";  
  } else {  
    getPasword.type = "password";  
  }  
}  
</script>	
	</body>
	<!-- end: BODY -->
</html>