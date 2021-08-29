<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);
include('config.php');
 $uid = mysqli_real_escape_string($db,$_POST['uid']);
$result = mysqli_query($db,"SELECT * FROM users where Email='$uid'")or die(mysqli_error());
while($row = mysqli_fetch_array( $result ))
{
try {
	
	$email= $row['Email'];

	//echo $email;
	$name=$row['Name'];
	echo $name;
	$pass =$row['Password'];
	//$body= $row['Body'];
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'studentprojectnm@gmail.com'; // YOUR gmail email
    $mail->Password = 'Arun@9611';// YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('studentprojectnm@gmail.com', 'Grama Panchyat');
    $mail->addAddress($email,$name);
    $mail->addReplyTo('studentprojectnm@gmail.com', 'Grama Panchyat'); // to set the reply to

    // Setting the email contentnce
    $mail->IsHTML(true);
    $mail->Subject = "Password Recovery of '$id'";
    $mail->Body = nl2br("Kindly Find your password below \n Email Id: '$email' \n Name: '$name' \n Password :'$pass'");
    //$mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    $mail->send();
   echo "<script type='text/javascript'>alert('Password sent your mail!!');</script>";
	echo "<script type='text/javascript'>window.location='login.php';</script>";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
}
?>