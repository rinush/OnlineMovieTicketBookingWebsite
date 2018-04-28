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
if(isset($_POST['submit'])){
$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host='smtp.gmail.com';
$mail->Port='465';
$mail->isHTML();
$mail->Username=$_POST['emailid'];
$mail->Password=$_POST['pass'];
$mail->SetFrom($_POST['emailid']);
$mail->Subject='Message';
$mail->Body=$_POST['msg'];
$mail->AddAddress('rinu098@gmail.com');
if($mail->Send()){
	echo '<h1>Thankyou for contacting us</h1>';
}
else{
	echo 'Failed to send mail';
}}
?>
<html>
<head>
<style>
body{
background-color:red;
}

ul{
list-style: none;
margin-left:25%;
}

li{
float:left;
}

li a{
display:block;
color:red;
text-decoration:none;
background-color:white;
padding:16px;
font-size:20px;}

li a:hover{
color:red;
text-decoration:none;
background-color:#4545ff;
}
#d2{
position:absolute;
top:60px;
left:20%;
border-radius: 5px;
background-color: #f2f2f2;
padding: 20px;
}
.a
{
width:45%; 
height:auto;
margin-left:20px;
float:left;}
.a input[type=text],input[type=tel],input[type=email],input[type=password],select{
    width: 100%;
    padding: 15px 20px;
    margin: 15px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
	float:left;
}
textarea {
    width: 100%;
    height: 100px;
    padding: 10px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
.b{
width:45%;
height:auto;
margin-left:10px;
}
.b input[type=reset],input[type=submit]{
    width: 100%;
    padding: 15px 20px;
    margin: 15px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
	float:left;
}
</style>
</head>
<body>
<ul>
<li><a href="home.html">HOME</a></li>
<li><a href="allmovies.php">ALL MOVIES</a></li>
<li><a href="booktickets.php">BOOK TICKETS</a></li>
<li><a href="register.php">REGISTER</a></li>
<li><a href="login.php">LOGIN</a></li>
<li><a href="contactus.php">CONTACT US</a></li>
</ul>
<div id="d2" style="width:950px; height:500px; position:relative; background-color:white;">
<form action="" method="POST">
<div class="a" style="float:left;">FIRST_NAME<br><input type="text" name="firstname" required></div>
<div class="a" style="float:left;">LAST_NAME<br><input type="text" name="lastname" required><br></div>
<div class="a" style="float:left;">COUNTRY<br><select required><option>India</option>Srilanka<option>Newzeland</option></select></div>
<div class="a" style="float:left;">EMAIL_ID<br><input type="email" name="emailid" required><br></div>
<div class="a" style="float:left;">Password<br><input type="text" name="pass" required><br></div>
<div class="a" style="float:left;">Review<br><input type="number" name="pass" required><br></div>
<div class="a" style="float:left;">MESSAGE<br><textarea name="msg"></textarea></div>
<div class="b" style="float:left;"><input type="reset"></div>
<div class="b" style="float:left;"><input type="submit" name="submit"></div>
</form>
</div>
</body>
</html>