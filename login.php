<?php
require 'core.inc.php';
$db=mysqli_connect('localhost','root','','test');
if(loggedin()){
	echo'<a href="logout.php" style="float:right;">Logout</a>';
}
else{
if(isset($_POST['emailid'])&&isset($_POST['pass']))
{
	$username=$_POST['emailid'];
	$password=$_POST['pass'];
	$_SESSION['emailid']=$username;
	$_SESSION['pass']=$password;
	if(!empty($username) && !empty($password))
	{
		$query="Select id from users WHERE email_id='$username' AND password='$password'";
		if($query_run=mysqli_query($db,$query))
		{
			 $rowcount=mysqli_num_rows($query_run);
			 if($rowcount==0)
			 {
				 echo '<h1>Incorrect username/password combination <a href="login.php">Try again</a> or <a href="register_form.php">Register</a></h1>';
			 }
			 else
			 {   
				 while($query_row=mysqli_fetch_assoc($query_run))
				 {
					  $user_id=$query_row['id'];
					  $_SESSION['user_id']=$username;
					  header('Location: allmovies.php');
				 }				 
			 }
		}
	}	
	else
	{
		echo 'You must supply a username and password.';
	}
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
.a input[type=email],input[type=password],input[type=reset],input[type=submit]{
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
<div id="d2" style="width:950px; height:200px; position:relative; background-color:white;">
<form action="" method="POST">
<div class="a" style="float:left;">USER_NAME<input type="email" name="emailid" required></div>
<div class="a" style="float:left;">PASSWORD<input type="password" name="pass" required></div>
<div class="a" style="float:left;"><input type="reset"></div>
<div class="a" style="float:left;"><input type="submit" value="Log In"></div>
</form>
</div>
</body>
</html>