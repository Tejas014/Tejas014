<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $uname = mysqli_real_escape_string($db,$_POST['uname']);
      //$pswd = mysqli_real_escape_string($db,$_POST['pswd']); 
	  $gender = mysqli_real_escape_string($db,$_POST['gender']); 
	  $add = mysqli_real_escape_string($db,$_POST['add']); 
      $email = mysqli_real_escape_string($db,$_POST['email']); 
      $ph = mysqli_real_escape_string($db,$_POST['ph']); 
      //$uid = mysqli_real_escape_string($db,$_POST['uid']); 
      
	  $sql = "Insert into users values ('$uname','$email','$ph','$gender','$ph','$add','President')";
	  
      $result = mysqli_query($db,$sql);
	  
    
     
   }

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'studentprojectnm@gmail.com'; // YOUR gmail email
    $mail->Password = 'Arun@9611'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('studentprojectnm@gmail.com', 'E-Grama Panchayat');
    $mail->addAddress($email,$uname);
    $mail->addReplyTo('studentprojectnm@gmail.com', 'E-Grama Panchayat'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "Welcome to E-grama Panchayt";
    $mail->Body = "Hi '$uname' Welcome to E-grama Panchayt. You are Sucessfully Added as a Prisident Email: '$email'  and Password: '$ph'";
    $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}




		echo "<script type='text/javascript'>alert('Registered Successfully !!');</script>";
		echo "<script type='text/javascript'>window.location='addpresident.php';</script>";
?>	  