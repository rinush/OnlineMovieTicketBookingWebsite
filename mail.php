<?php
$db=mysqli_connect('localhost','root','','test');
include 'core.inc.php';
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/OAuth.php';
require 'PHPMailer/src/POP3.php';
require 'autoloader.php';
$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host='smtp.gmail.com';
$mail->Port='465';
$mail->isHTML();
$mail->Username='rinu098@gmail.com';
$mail->Password='india693';
$mail->SetFrom('no-reply@howcode.org');
$mail->Subject='Ticket/s Booked';
$mail->Body='Your Tickets are booked successfully';
$mail->AddAddress('rinu098@gmail.com');
//$filepath='C:/xampp/htdocs/Login/preview.php';
//$mail->AddAttachment($filepath , 'preview.php' );
$mail->Send();
//header('Location: success.php');
?>