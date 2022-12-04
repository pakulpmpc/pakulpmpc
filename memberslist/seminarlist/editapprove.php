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
        $query=mysqli_query($conn, "SELECT * FROM seminar WHERE `id`='$id'") or die(mysqli_error());
        $fetch=mysqli_fetch_array($query);

        $tin=$fetch['tin'];
        $firstname=$fetch['firstname'];
        $middlename=$fetch['middlename'];
        $lastname=$fetch['lastname'];
        $edad=$fetch['edad'];
        $contact=$fetch['contact'];
	$barangay=$fetch['barangay'];
	$bayan=$fetch['bayan'];
        $attended=$fetch['attended'];
        $interview=$fetch['interview'];
        $requirements=$fetch['requirements'];
	$INCreq=$fetch['INCreq'];
        $pay=$fetch['pay'];
        $howmuch=$fetch['howmuch'];
	$INCreq=$fetch['INCreq'];
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
        $mail->Subject = 'Membership Application in PMPCMMS - Seminar Attendee ';
        $mail->Body    = "Hi $firstname, <br><br> Your Application has been approved!<br> You have pay the amount of <b>$howmuch pesos</b> making you a <b>$type</b> type of member<br>Just a reminder to attend the meeting quarterly or once every <b>3 months.</b> <br><br>If you ever have an incomplete requirements that is not passed during the seminar, please do complete it as soon as possible. <br> We were happy that you are now part of our cooperative! <br><br>Have a good day and God Bless! Thank you.";
        $mail->AltBody = "Hi $firstname, <br><br>Your Application has been approved!<br> You have pay the amount of <b>$howmuch pesos</b> making you a $type type of member<br>Just a reminder to attend the meeting quarterly or once every 3 months. <br>If you ever have an incomplete requirements that is not passed during the seminar, please do complete it as soon as possible. <br> We were happy that you are now part of our cooperative! <br><br>Have a good day and God Bless!Thank you.";

        $mail->addAddress($contact);
        $mail->isHTML(true);
        $mail->send();
        $alert="<div class='alert-success'><span>Message Sent!</span></div>";
        
 
         
         mysqli_query($conn, "INSERT INTO members (tin,firstname,middlename,lastname, edad, contact, barangay, bayan, attended,interview,requirements,pay,howmuch, INCreq,type,date_join, status)
        VALUES('$tin','$firstname','$middlename','$lastname', '$edad', '$contact', '$barangay', '$bayan','$attended','$interview','$requirements','$pay','$howmuch','$INCreq', '$type', '$date_join','$status')")
        or die(mysqli_error());

         $sql = "DELETE FROM seminar WHERE id='" . $_GET["id"] . "'";
        if (mysqli_query($conn, $sql)){
        header("Location: seminartable.php");
        }
        echo"<script>alert('Data successfully transfer')</script>";
    

}
?>