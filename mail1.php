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
$query='SELECT * from counter';
if($query_run=mysqli_query($db,$query)){
	if (mysqli_num_rows($query_run) > 0) {
    while($query_row = mysqli_fetch_assoc($query_run)) {
		 $i=$query_row['count'];
    }
  }
}
$i++;
$filepath='C:/xampp/htdocs/Login/doc_'.$i.'.pdf';
$mail->AddAttachment($filepath , 'doc_'.$i.'.pdf');
$mail->Send();
$query="UPDATE `counter` SET `count` = '$i' WHERE `counter`.`id` = 1";
$query_run=mysqli_query($db,$query);
//header('Location: success.php');
?>