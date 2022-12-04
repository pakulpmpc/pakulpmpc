<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

$mail= new PHPMailer(true);
$alert = '';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
   
    try{
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username= 'ignaciosairacamille@gmail.com';
        $mail->Password = 'vcnsfmshdqlrpyzc';
        $mail->SMTPSecure= "tls";
        $mail->Port='587';

        $mail->setFrom('ignaciosairacamille@gmail.com');
        $mail->addAddress('yabutbabygirl@gmail.com');
        $mail->isHTML(true);
        $mail->Subject='Message Received from Contact:'. $name;
        $mail->Body="Name:$name <br> Phone:$phone<br>Subject:$subject<br>Message:$message<br>";
        $mail->send();
        $alert="<div class='alert-success'><span>Message Sent!</span></div>";
    
    }catch(Exception $e){
$alert = "<div class ='alert-error'><span>'.$e->getMessage().'</span></div>";
    }

}

?>