<?php
include 'core.inc.php';
$db=mysqli_connect('localhost','root','','test');
if(isset($_POST['customername']) && isset($_POST['contact']) && isset($_POST['emailid']) && isset($_POST['pass']) && isset($_POST['country'])
	&& isset($_POST['state']) && isset($_POST['district']) && isset($_POST['address']))
	{
		if(!empty($_POST['customername']) && !empty($_POST['contact']) && !empty($_POST['emailid']) && !empty($_POST['pass']) && !empty($_POST['country'])
	&& !empty($_POST['state']) && !empty($_POST['district']) && !empty($_POST['address'])){
		$customername=$_POST['customername'];
		$contact=$_POST['contact'];
		$email_id=$_POST['emailid'];
		$password=$_POST['pass'];
		$country=$_POST['country'];
		$state=$_POST['state'];
		$district=$_POST['district'];
		$address=$_POST['address'];
		$query="SELECT email_id,password from users where email_id='$email_id' AND password='$password'";
		$query_run=mysqli_query($db,$query);
		if($rows=mysqli_num_rows($query_run))
		{
			echo 'This email_id already exists';
		}
		else{
			$query="INSERT INTO users VALUES ('','".mysqli_real_escape_string($db,$customername)."','".mysqli_real_escape_string($db,$email_id)."',
			'".mysqli_real_escape_string($db,$password)."','".mysqli_real_escape_string($db,$contact)."',
		    '".mysqli_real_escape_string($db,$country)."','".mysqli_real_escape_string($db,$state)."',
			'".mysqli_real_escape_string($db,$district)."','".mysqli_real_escape_string($db,$address)."')";
			if($query_run=mysqli_query($db,$query)){
				header('Location: login.php');
			}
			else{
				echo 'Could not Register';
			}
		}
	}
	else{
		echo 'All fields are required';
	}
	}
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
<div id="d2" style="width:950px; height:750px; position:relative; background-color:white;">
<h1>REGISTRATION FORM</h1>
<hr>
<h2>CUSTOMER INFORMATION</h2>
<hr>
<form action="" method="POST">
<div class="a" style="float:left;">NAME<br><input type="text" name="customername" required></div>
<div class="a" style="float:left;">CONTACT_NO.<br><input type="tel" name="contact" maxlength="10" required><br></div>
<div class="a" style="float:left;">EMAIL_ID<input type="email" name="emailid" required></div>
<div class="a" style="float:left;">PASSWORD<input type="password" name="pass" required></div>
<h2>ADDRESS INFORMATION</h2><hr><br>
<div class="a" style="float:left;">COUNTRY
<select required name="country">
<option selected>India</option>
</select></div>
<div class="a" style="float:left;">STATE
<select required name="state">
<option selected>Rajasthan</option>
</select></div>
<div class="a" style="float:left;" name="district">
DISTRICT
<select required name="district">
<option selected>Jaipur</option>
</select></div>
<div class="a" style="float:left;" name="address">ADDRESS
<textarea name="address"></textarea></div>
<div class="b" style="float:left;"><input type="reset"></div>
<div class="b" style="float:left;"><input type="submit" value="Register"></div>
</form>
</div>
</body>
</html>