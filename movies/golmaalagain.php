<?php
$db=mysqli_connect('localhost','root','','test');
include '../core.inc.php';
if(isset($_POST['submit']))
{
	$_SESSION['mname']='Golmaal Again';
	$_SESSION['mtime']='2hours';
    $_SESSION['mtype']='Comedy';
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
<a href="../golmaal4rate.php" style="text-decoration:none; position:relative; top:-40px; margin-left:480px; z-index:2; font-size:18px;">Rate</a>
<img src="../images/golmaalagain.jpg" style="float:left; border:2px solid red; margin-left:10px;" width="300" height="400">
<table width="500" height="800">
<form action="" method="POST">
<tr height="75">
<td width="150">Name</td>
<td>Golmaal Again</td>
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
<td>Rohit Shetty</td>
</tr>

<tr>
<td>Cast</td>
<td>Ajay Devgn, Parineeti Chopra, Tabu, Arshad Warsi, Tushar Kapoor, Shreyas Talpade, Prakash Raj, Neil Nitin Mukesh</td>
</tr>

<tr>
<td>Description</td>
<td>Golmaal (English: Chaos Again) is an upcoming Indian film directed and co-produced by Rohit Shetty.</td>
</tr>
</table>
<img src="../images/golmaal41.jpg" style="float:left; margin-left:10px; margin-top:-380px;" width="300" height="400">
<input type="submit" name="submit" value="BOOKTICKETS" style="background-color:red; height:50px; width:200px; border:1px solid black; border-radius:5px; margin-top:20px; margin-left:200px;">
</form>
</div>
</body>
</html>