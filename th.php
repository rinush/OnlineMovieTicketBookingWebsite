<?php
$db=mysqli_connect('localhost','root','','test');
require 'core.inc.php';
	if(isset($_POST['btn_f']) && !empty($_POST['btn_f'])){
    $show_time=$_POST['btn_f'];
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
		  	header("Location: prsac.php");	
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
table{
border: 1px solid black;
border-collapse:collapse;
}
td  {
border-bottom:1px solid black;
}
.btn-group .button {
    background-color: white;
    border: 1px solid black;
    color: blue;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    cursor: pointer;
    float: left;
	margin:10px;
	border-radius:8px;	
}
.btn-group .button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}
.btn-group .button:hover {
    background-color: #f2f2f2;
}


</style>
</head>
<body>
<ul>
<li><a href="C:/Users/rkg09/Desktop/New folder/MiniProject/home.html">HOME</a></li>
<li><a href="C:/Users/rkg09/Desktop/New folder/MiniProject/allmovies.html">ALL MOVIES</a></li>
<li><a href="C:/Users/rkg09/Desktop/New folder/MiniProject/booktickets.html">BOOK TICKETS</a></li>
<li><a href="register.php">REGISTER</a></li>
<li><a href="login.php">LOGIN</a></li>
<li><a href="C:/Users/rkg09/Desktop/New folder/MiniProject/contactus.html">CONTACT US</a></li>
</ul>
<div id="d2" style="width:950px; height:1150px; position:relative; background-color:white;">
 <a href="logout.php" style="float:right;">Logout</a>
<table>

<tr>
<th style="text-align:left;">CINEMA</th>
<th style="text-align:left;">ADDRESS</th>
<th style="text-align:right;">SHOW</th>
</tr>

<tr>
<td>Cinepolis</td>
<td>Alpha One Mall, Ahmedabad</td>
<td><div class="btn-group">
<form action="" method="post">
<input type="text" name="btn_f" style="display:none;" id="txt1">
<input type="submit"  id="btn1" class="button" value="8:30 AM" onclick="document.getElementById('txt1').value=document.getElementById('btn1').value;">
</form></div></td>
<td><div class="btn-group">
<form action="" method="post"><input type="text" name="btn_f" style="display:none;" id="txt2"><input type="submit" id="btn2" class="button" value="11:00 AM" onclick="document.getElementById('txt2').value=document.getElementById('btn2').value;"></form></div></td>
<td><div class="btn-group">
<form action="" method="post"><input type="submit"  class="button" value="1:40 PM"></form></div></td>
<td><div class="btn-group">
<form action="" method="post"><input type="submit"  class="button" value="3:00 PM"></form></div></td>
<td><div class="btn-group">
<form action="" method="post"><input type="submit"  class="button" value="5:30 PM"></form></div></td>
<td><div class="btn-group">
<form action="" method="post"><input type="submit"  class="button" value="8:00 PM"></form></div></td>
<td><div class="btn-group">
<form action="" method="post"><input type="submit"  class="button" value="10:30 PM"></form><div></td>
</tr>

<tr>
<td>PVR</td>
<td>Acropolis, Ahmedabad</td>
<td><div class="btn-group">
  <button class="button">8:30 AM</button></div></td>
<td><div class="btn-group">
  <button class="button">11:00 AM</button></td>
<td><div class="btn-group">
  <button class="button">1:40 PM</button></td>
<td><div class="btn-group">
  <button class="button">3:00 PM</button></td>
  <td><div class="btn-group">
  <button class="button">5:30 PM</button></td>
   <td><div class="btn-group">
  <button class="button">8:00 PM</button></td>
   <td><div class="btn-group">
  <button class="button">10:30 PM</button></td>
</tr>

<tr>
<td>SB Multiplex</td>
<td>Agora Mall</td>
<td><div class="btn-group">
  <button class="button">8:30 AM</button></div></td>
<td><div class="btn-group">
  <button class="button">11:00 AM</button></td>
<td><div class="btn-group">
  <button class="button">1:40 PM</button></td>
<td><div class="btn-group">
  <button class="button">3:00 PM</button></td>
  <td><div class="btn-group">
  <button class="button">5:30 PM</button></td>
   <td><div class="btn-group">
  <button class="button">8:00 PM</button></td>
   <td><div class="btn-group">
  <button class="button">10:30 PM</button></td>
</tr>

<tr>
<td>AB Miniplex</td>
<td>Shivranjini Cross Road, Satellite</td>
<td><div class="btn-group">
  <button class="button">8:30 AM</button></div></td>
<td><div class="btn-group">
  <button class="button">11:00 AM</button></td>
<td><div class="btn-group">
  <button class="button">1:40 PM</button></td>
<td><div class="btn-group">
  <button class="button">3:00 PM</button></td>
  <td><div class="btn-group">
  <button class="button">5:30 PM</button></td>
   <td><div class="btn-group">
  <button class="button">8:00 PM</button></td>
   <td><div class="btn-group">
  <button class="button">10:30 PM</button></td>
</tr>

<tr>
<td>Amber Cinema</td>
<td>Ahmedabad</td>
<td><div class="btn-group">
  <button class="button">8:30 AM</button></div></td>
<td><div class="btn-group">
  <button class="button">11:00 AM</button></td>
<td><div class="btn-group">
  <button class="button">1:40 PM</button></td>
<td><div class="btn-group">
  <button class="button">3:00 PM</button></td>
  <td><div class="btn-group">
  <button class="button">5:30 PM</button></td>
   <td><div class="btn-group">
  <button class="button">8:00 PM</button></td>
   <td><div class="btn-group">
  <button class="button">10:30 PM</button></td>
</tr>

<tr>
<td>Anupam Cinema</td>
<td>Ahmedabad</td>
<td><div class="btn-group">
  <button class="button">8:30 AM</button></div></td>
<td><div class="btn-group">
  <button class="button">11:00 AM</button></td>
<td><div class="btn-group">
  <button class="button">1:40 PM</button></td>
<td><div class="btn-group">
  <button class="button">3:00 PM</button></td>
  <td><div class="btn-group">
  <button class="button">5:30 PM</button></td>
   <td><div class="btn-group">
  <button class="button">8:00 PM</button></td>
   <td><div class="btn-group">
  <button class="button">10:30 PM</button></td>
</tr>

<tr>
<td>Cinemax</td>
<td>Dev Arc, Ahmedabad</td>
<td><div class="btn-group">
  <button class="button">8:30 AM</button></div></td>
<td><div class="btn-group">
  <button class="button">11:00 AM</button></td>
<td><div class="btn-group">
  <button class="button">1:40 PM</button></td>
<td><div class="btn-group">
  <button class="button">3:00 PM</button></td>
  <td><div class="btn-group">
  <button class="button">5:30 PM</button></td>
   <td><div class="btn-group">
  <button class="button">8:00 PM</button></td>
   <td><div class="btn-group">
  <button class="button">10:30 PM</button></td>
</tr>

<tr>
<td>City Gold Satellite</td>
<td>Ahmedabad</td>
<td><div class="btn-group">
  <button class="button">8:30 AM</button></div></td>
<td><div class="btn-group">
  <button class="button">11:00 AM</button></td>
<td><div class="btn-group">
  <button class="button">1:40 PM</button></td>
<td><div class="btn-group">
  <button class="button">3:00 PM</button></td>
  <td><div class="btn-group">
  <button class="button">5:30 PM</button></td>
   <td><div class="btn-group">
  <button class="button">8:00 PM</button></td>
   <td><div class="btn-group">
  <button class="button">10:30 PM</button></td>
</tr>

<tr>
<td>City Gold</td>
<td>Ashram Road</td>
<td><div class="btn-group">
  <button class="button">8:30 AM</button></div></td>
<td><div class="btn-group">
  <button class="button">11:00 AM</button></td>
<td><div class="btn-group">
  <button class="button">1:40 PM</button></td>
<td><div class="btn-group">
  <button class="button">3:00 PM</button></td>
  <td><div class="btn-group">
  <button class="button">5:30 PM</button></td>
   <td><div class="btn-group">
  <button class="button">8:00 PM</button></td>
   <td><div class="btn-group">
  <button class="button">10:30 PM</button></td>
</tr>

<tr>
<td>City Gold</td>
<td> Bapunagar</td>
<td><div class="btn-group">
  <button class="button">8:30 AM</button></div></td>
<td><div class="btn-group">
  <button class="button">11:00 AM</button></td>
<td><div class="btn-group">
  <button class="button">1:40 PM</button></td>
<td><div class="btn-group">
  <button class="button">3:00 PM</button></td>
  <td><div class="btn-group">
  <button class="button">5:30 PM</button></td>
   <td><div class="btn-group">
  <button class="button">8:00 PM</button></td>
   <td><div class="btn-group">
  <button class="button">10:30 PM</button></td>
</tr>

<tr>
<td>City Gold</td>
<td>Bopal</td>
<td><div class="btn-group">
  <button class="button">8:30 AM</button></div></td>
<td><div class="btn-group">
  <button class="button">11:00 AM</button></td>
<td><div class="btn-group">
  <button class="button">1:40 PM</button></td>
<td><div class="btn-group">
  <button class="button">3:00 PM</button></td>
  <td><div class="btn-group">
  <button class="button">5:30 PM</button></td>
   <td><div class="btn-group">
  <button class="button">8:00 PM</button></td>
   <td><div class="btn-group">
  <button class="button">10:30 PM</button></td>
</tr>

<tr>
<td>City Gold</td>
<td>Motera</td>
<td><div class="btn-group">
  <button class="button">8:30 AM</button></div></td>
<td><div class="btn-group">
  <button class="button">11:00 AM</button></td>
<td><div class="btn-group">
  <button class="button">1:40 PM</button></td>
<td><div class="btn-group">
  <button class="button">3:00 PM</button></td>
  <td><div class="btn-group">
  <button class="button">5:30 PM</button></td>
   <td><div class="btn-group">
  <button class="button">8:00 PM</button></td>
   <td><div class="btn-group">
  <button class="button">10:30 PM</button></td>
</tr>

<tr>
<td>Devi Multiplex</td>
<td>Naroda</td>
<td><div class="btn-group">
  <button class="button">8:30 AM</button></div></td>
<td><div class="btn-group">
  <button class="button">11:00 AM</button></td>
<td><div class="btn-group">
  <button class="button">1:40 PM</button></td>
<td><div class="btn-group">
  <button class="button">3:00 PM</button></td>
  <td><div class="btn-group">
  <button class="button">5:30 PM</button></td>
   <td><div class="btn-group">
  <button class="button">8:00 PM</button></td>
   <td><div class="btn-group">
  <button class="button">10:30 PM</button></td>
</tr>

<tr>
<td>K Sera Sera</td>
<td>SG Highway</td>
<td><div class="btn-group">
  <button class="button">8:30 AM</button></div></td>
<td><div class="btn-group">
  <button class="button">11:00 AM</button></td>
<td><div class="btn-group">
  <button class="button">1:40 PM</button></td>
<td><div class="btn-group">
  <button class="button">3:00 PM</button></td>
  <td><div class="btn-group">
  <button class="button">5:30 PM</button></td>
   <td><div class="btn-group">
  <button class="button">8:00 PM</button></td>
   <td><div class="btn-group">
  <button class="button">10:30 PM</button></td>
</tr>

</table>
</div>
</body>
</html>