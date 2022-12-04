<?php
$conn = mysqli_connect("localhost","root","","pakul");

if ($conn === false){
die("connection failed" 
. mysqli_connect_error());
}
       if(ISSET($_REQUEST['id'])){
        $id=$_REQUEST['id'];
        $query=mysqli_query($conn, "SELECT * FROM userask WHERE `id`='$id'") or die(mysqli_error());
        $fetch=mysqli_fetch_array($query);

        $tinid=$fetch['tinid'];
        $fullname=$fetch['fullname'];
        $phone=$fetch['phone'];
	$address=$fetch['address'];
	$username=$fetch['username'];
        $password=$fetch['password'];
        $usertype=$fetch['usertype'];
        $date_join=$fetch['date_join'];

 
         
         mysqli_query($conn, "INSERT INTO users (tinid,fullname, phone, address, username, password,usertype,date_join)
        VALUES('$tinid','$fullname', '$phone', '$address', '$username','$password','$usertype','$date_join')")
        or die(mysqli_error());

         $sql = "DELETE FROM userask WHERE id='" . $_GET["id"] . "'";
        if (mysqli_query($conn, $sql)){
        header("Location: usertable.php");
        }
        echo"<script>alert('Data successfully transfer')</script>";
    

}
?>