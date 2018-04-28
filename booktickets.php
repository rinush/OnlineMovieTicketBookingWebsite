<?php
$db=mysqli_connect('localhost','root','','test');
require 'core.inc.php';
if(!loggedin())
{
	echo '<h1>Please login</h1>';
}
else
{
	if(isset($_POST['submit'])){
    $show_time=$_POST['btn'];
    $_SESSION['show_time']=$show_time;
	$query="SELECT * FROM theatre WHERE Show_Time='$show_time'";
	if($query_run=mysqli_query($db,$query)){
	 $rows=mysqli_num_rows($query_run);
	 if($query_row=mysqli_fetch_assoc($query_run)){
		 $rows=$query_row['seats_left'];
	  if($rows==0)
	  {
		  echo '<h1>No seats Available!</h1>';
	  }
	  else{
		  	header("Location: seats_book.php");		
	   }
	  }
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
.a input[type=text],input[type=date],input[type=number],select{
    width: 100%;
    padding: 15px 20px;
    margin: 15px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
	float:left;
}
.b{
width:20%;
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
<div id="d2" style="width:950px; height:400px; position:relative; background-color:white;">
<form action="" method="POST">
 <div class="a" style="float:left;">Select Movie<br>
<select>
<option selected>Golmaal Again</option> <option>Raees</option> <option>Chef</option> <option>Hindi Medium</option>
</select></div>
 <div class="a" style="float:left;">Select Date<br>
<input type="date"></div>
 <div class="a" style="float:left;">Select Show<br>
<select name="btn">
<option selected>8:30 AM</option>
<option>11:00 AM</option>
</select> </div>
<div class="a" style="float:left;">Number of seats<br>
<select>
<option selected>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
</select></div>
 <div class="b" style="float:left;"><input type="reset"></div>
 <div class="b" style="float:left;">
<input type="submit" value="BOOK TICKET" name="submit"></div>
</form>
</div>
</body>
</html>