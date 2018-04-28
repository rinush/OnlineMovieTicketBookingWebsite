<?php
$db=mysqli_connect('localhost','root','','test');
include 'core.inc.php';
if(!loggedin())
{
	echo 'Please login';
}
else
{   $payment_mode='None';
	if(isset($_POST['btn_f']) && !empty($_POST['btn_f'])){
    $payment_mode=$_POST['btn_f'];
	$_SESSION['payment_mode']=$payment_mode;
   } 	
   if($payment_mode=='CREDIT')
   {
	   header("Location: creditcard.php");
   }
   else if($payment_mode=='CASH'){
	   header("Location: cash.php");
   }
   
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
padding:16px;}

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
.button{
width:45%;
height:auto;
margin-left:10px;
}
.button input[type=reset],input[type=submit]{
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
<div id="d2" style="width:950px; height:300px; position:relative; background-color:white;">
<h1>Select Payment Mode</h1>
  <form action="" method="post"><input type="text" name="btn_f" style="display:none;" id="txt1"><input type="submit"  id="btn1" class="button" value="CASH" onclick="document.getElementById('txt1').value=document.getElementById('btn1').value;"></form>
  <form action="" method="post"><input type="text" name="btn_f" style="display:none;" id="txt2"><input type="submit"  id="btn2" class="button" value="CREDIT" onclick="document.getElementById('txt2').value=document.getElementById('btn2').value;"></form>
 <a href="logout.php">Logout</a>
  </div>
</body>
</html>