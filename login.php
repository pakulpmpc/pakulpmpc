<?php
$host="localhost";
$user="root";
$password="";
$db="pakul";

session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
	die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];

		$sql = "SELECT * FROM `users` WHERE username='$username' AND password='$password'"; 

    $result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{
		$_SESSION["username"]=$username;
		header("location: userpage/loan.php");
	}
	else if($row["usertype"]=="admin")
	{
		$_SESSION["username"]=$username;
		header("location: adminpage/admin.php");
	}
	else
	{
		header("Location: login.php?error= There is something wrong with your process" );
        	    exit(); 
	}
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="userpage/assets/pakul.jpg" />
    <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
	<title>PMPC | LOGIN</title>
      <link rel="stylesheet" href="css1.css">
 

</head>

<style>
    input.checkbox {
        transform: scale(1.5);
}

/* Might want to wrap a span around your checkbox text */
.checkboxtext
{
  /* Checkbox text */
  font-size: 10%;
  display: inline;
}
</style>
<body>

	<div class="wrapper">
        
        <div class="logo">
            <img src="logo.jpg" alt="">
        </div>
        <center>
        <div class="text-center mt-4 name">
            Welcome to <label style="color:orange">PMPC</label>
        </div>


     	 <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error'];?></p>
      <?php } ?>

        </center>
        <br>
        <form class="p-3 mt-3"  action="#" method="POST" autocomplete="off">
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-user"></span>
                <input type="text" name="username" id="userName" placeholder="Username">
            </div>
            <br>
            <div class="form-field d-flex align-items-center">
           <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
                </div>
                <center>
                <div>

         
            </div></center>

            <br> <br>
            <button class="btn mt-3" type="submit">Login</button>
             <div class="mt-4">
				<div class="d-flex justify-content-center links"><br>
					Don't have an account? <a href="newacc.php" class="ml-2">Sign Up</a>
				</div>	
			</div>
        </form>
        
    </div>
      
</html>