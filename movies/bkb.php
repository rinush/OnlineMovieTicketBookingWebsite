<?php
$db=mysqli_connect('localhost','root','','test');
include '../core.inc.php';
if(isset($_POST['submit']))
{
	$_SESSION['mname']='Bareilly Ki Barfi';
	$_SESSION['mtime']='2hours';
    $_SESSION['mtype']='Drama';
    header('Location: ../theatre.php');	
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
}
table,tr{
border-bottom: 2px solid red;
border-collapse: collapse;
position:relative;
margin-left:400px;
font-size:25px;
}
td{
padding 10px;}
a{
	color:black;
}

a:hover{
	color:red;
}
</style>
</head>
<body>
<ul>
<li><a href="../home.html">HOME</a></li>
<li><a href="../allmovies.php">ALL MOVIES</a></li>
<li><a href="../booktickets.php">BOOK TICKETS</a></li>
<li><a href="../register.php">REGISTER</a></li>
<li><a href="../login.php">LOGIN</a></li>
<li><a href="../contactus.php">CONTACT US</a></li>
</ul>
<div id="d2" style="width:980px; height:950px; position:relative; background-color:white; border-radius:10px;">
<a href="../bkbrate.php" style="text-decoration:none; position:relative; top:-40px; margin-left:480px; z-index:2; font-size:18px;">Rate</a>
<img src="../images/bkb.jpg" style="float:left; border:2px solid red; margin-left:10px;" width="300" height="400">
<table width="500" height="800">
<form action="" method="POST">
<tr height="75">
<td width="150">Name</td>
<td>Bareilly Ki Barfi</td>
</tr>

<tr>
<td>Certificate</td>
<td>U/A</td>
</tr>

<tr>
<td>Type</td>
<td>Comedy</td>
</tr>

<tr>
<td>Language</td>
<td>Hindi</td>
</tr>

<tr>
<td>Duration</td>
<td>2 hours</td>
</tr>

<tr>
<td>Director</td>
<td>Ashwiny Iyer Tiwari</td>
</tr>

<tr>
<td>Cast</td>
<td>Rajkummar Rao
, Ayushmann Khurrana
, Kriti Sanon</td>
</tr>

<tr>
<td>Description</td>
<td>Bitti (Kriti Sanon) is a young contemporary girl in Bareilly, Uttar Pradesh, who works in complaint department of electricity board and is the apple of her father's eye. Like most Indian mothers, Bitti's mother wants to see her daughter get married to a nice man from a good family.</td>
</tr>
</table>
<img src="../images/bkb1.jpg" style="float:left; margin-left:10px; margin-top:-380px;" width="300" height="400">
<input type="submit" style="background-color:red; height:50px; width:200px; border:1px solid black; border-radius:5px; margin-top:20px; margin-left:200px;" value="BOOK TICKET" name="submit">
</form>
</div>
</body>
</html>