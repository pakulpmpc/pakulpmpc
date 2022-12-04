<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

$conn = mysqli_connect("localhost","root","","pakul");

if ($conn === false){
die("connection failed" 
. mysqli_connect_error());
}
       if(ISSET($_REQUEST['id'])){
        $id=$_REQUEST['id'];
        $query=mysqli_query($conn, "SELECT * FROM register WHERE `id`='$id'") or die(mysqli_error());
        $fetch=mysqli_fetch_array($query);

        $tin=$fetch['tin'];
        $firstname=$fetch['firstname'];
        $middlename=$fetch['middlename'];
        $lastname=$fetch['lastname'];
        $edad=$fetch['edad'];
        $contact=$fetch['contact'];
	$barangay=$fetch['barangay'];
	$bayan=$fetch['bayan'];
        $seminardate=$fetch['seminardate'];
        $type=$fetch['type'];
        $date_join=$fetch['date_join'];
        $status=$fetch['status'];

        $mail= new PHPMailer(true);
        // Settings
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';

        $mail->Host       = "smtp.gmail.com";    // SMTP server example
        $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->Port       = 587;                    // set the SMTP port for the GMAIL server
        $mail->Username   = "pakulpmpcmms@gmail.com";            // SMTP account username example
        $mail->Password   = "aysobmjjelewlqxo";            // SMTP account password example

        // Content
        $mail->isHTML(true);                       // Set email format to HTML
        $mail->Subject = 'Pre-registration for PMPC membership';
        $mail->Body    = "Hi $firstname, <br><br> You have been given a schedule to attend the seminar. <br> Please visit the PMPC office located in Pakul Jaen Nueva Ecija in <b>$seminardate</b> <br><br>Please go to the exact appointed time and date of your seminar and strictly no proxy allowed.<br> Bring the necessary documents needed in the application as well as the fees needed in the application. <br><br>Have a good day and God Bless! Thank you.";
        $mail->AltBody = "Hi $firstname, <br><br>You have been given a schedule to attend the seminar. <br> Please visit the PMPC office located in Pakul Jaen Nueva Ecija in <b>$seminardate</b> <br>Please go to the exact appointed time and date of your seminar and strictly no proxy allowed.<br> Bring the necessary documents needed in the application as well as the fees needed in the application. <br><br>Have a good day and God Bless!Thank you.";

        $mail->addAddress($contact);
        $mail->isHTML(true);
        $mail->send();
        $alert="<div class='alert-success'><span>Message Sent!</span></div>";
        
         
         mysqli_query($conn, "INSERT INTO seminar (tin,firstname,middlename,lastname, edad, contact, barangay, bayan,seminardate, type,date_join, status)
        VALUES('$tin','$firstname','$middlename','$lastname', '$edad', '$contact', '$barangay', '$bayan','$seminardate','$type', '$date_join','$status')")
        or die(mysqli_error());

         $sql = "DELETE FROM register WHERE id='" . $_GET["id"] . "'";

        
        if (mysqli_query($conn, $sql)){
        header("Location: registertable.php");
        }
        echo"<script>alert('Data successfully transfer')</script>";
    

}
?>