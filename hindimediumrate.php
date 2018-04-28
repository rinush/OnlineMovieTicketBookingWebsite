<?php
$db=mysqli_connect('localhost','root','','test');
include 'core.inc.php';
if(isset($_POST['submit'])){
	$email=$_SESSION['user_id'];
	$rate=$_POST['rate'];
	$query="INSERT INTO `reviews` VALUES('','$email','$rate','Hindi Medium')";
	$query_run=mysqli_query($db,$query);
	header('Location: movies/hindimedium.php');
}
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
font-size:18px;}

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
font-size:25px;
margin-left:20px;
}

td{
padding 10px;}

th{
	text-align:left;
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
<div id="d2" style="width:950px; height:250px; position:relative; background-color:white;">
<table width="900" height="100" style="position:relative; top:10px;">
<form action="" method="POST">

<tr>

<th>Movie Name</th>

<th>Rating</th>

</tr>

<tr height="20">
<td>Hindi Medium</td>
<td>
<span class="fa fa-star" id="a1" onclick="Change_Color(id,0)"></span>
<span class="fa fa-star" id="a2" onclick="Change_Color(id,1)"></span>
<span class="fa fa-star" id="a3" onclick="Change_Color(id,2)"></span>
<span class="fa fa-star" id="a4" onclick="Change_Color(id,3)"></span>
<span class="fa fa-star" id="a5" onclick="Change_Color(id,4)"></span>
</td>
</tr>
</table>
<script>
var count = [];
var rate=0;
for(var i=0;parseInt(i)<parseInt(100);i=parseInt(i)+parseInt(1))
{
  count[i]=parseInt(0);
}
function Change_Color(id,m)
{
 count[m]=parseInt(count[m])+parseInt(1);
 if(parseInt(count[m])%parseInt(2)!=0){
 document.getElementById(id).style.color='orange';
 rate=parseInt(rate)+parseInt(1);
 } 
 else{
 document.getElementById(id).style.color='black';
 rate=parseInt(rate)-parseInt(1);
 }
 document.getElementById('txt').value=rate;
}
</script>
<input type="text" id="txt" name="rate" style="display:none;">
<input type="submit" value="Rate" name="submit" style="background-color:#bfbfbf; margin-top:50px; float:right; margin-right:40px; width:100px; border-radius:5px; height:40px;">
</form>
</div>
</body>
</html>