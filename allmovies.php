<?php
require 'core.inc.php';
$db=mysqli_connect('localhost','root','','test');
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
<li><a href="home.html">HOME</a></li>
<li><a href="allmovies.php">ALL MOVIES</a></li>
<li><a href="booktickets.php">BOOK TICKETS</a></li>
<li><a href="register.php">REGISTER</a></li>
<li><a href="login.php">LOGIN</a></li>
<li><a href="contactus.php">CONTACT US</a></li>
</ul>
<div id="d2" style="width:950px; height:900px; position:relative; background-color:white;">
<a href="review.php" style="text-decoration:none;">Movie Reviews</a>
<div style="position:absolute; margin-left:10px; margin-top:40px;"><img src="images/chef.jpg" width="240px" height="300px"/></div>
<div style="position:absolute; margin-left:320px; margin-top:40px;"><img src="images/bkb.jpg" width="240px" height="300px" /></div>
<div style="position:absolute; margin-left:630px; margin-top:40px;"><img src="images/golmaalagain.jpg" width="240px" height="300px" /></div>
<div style="position:absolute; margin-left:30px; margin-top:370px;"><a href="movies/chef.php"><button style="width:200px; height:50px; border-radius:20px; background-color:red;">Buy Ticket</button></a></div>
<div style="position:absolute; margin-left:330px; margin-top:370px;"><a href="movies/bkb.php"><button style="width:200px; height:50px; border-radius:20px; background-color:red;">Buy Ticket</button></a></div>
<div style="position:absolute; margin-left:650px; margin-top:370px;"><a href="movies/golmaalagain.php"><button style="width:200px; height:50px; border-radius:20px; background-color:red;">Buy Ticket</button></a></div>
<div style="position:absolute; margin-left:10px; margin-top:470px;"><img src="images/padmavati.jpg" width="240px" height="300px" /></div>
<div style="position:absolute; margin-left:320px; margin-top:470px;"><img src="images/hindimedium.jpg" width="240px" height="300px" /></div>
<div style="position:absolute; margin-left:630px; margin-top:470px;"><img src="images/raees.jpg" width="240px" height="300px" /></div>
<div style="position:absolute; margin-left:30px; margin-top:780px;"><a href="movies/padmavati.php"><button style="width:200px; height:50px; border-radius:20px; background-color:red;">Buy Ticket</button></a></div>
<div style="position:absolute; margin-left:330px; margin-top:780px;"><a href="movies/hindimedium.php"><button style="width:200px; height:50px; border-radius:20px; background-color:red;">Buy Ticket</button></a></div>
<div style="position:absolute; margin-left:650px; margin-top:780px;"><a href="movies/raees.php"><button style="width:200px; height:50px; border-radius:20px; background-color:red;">Buy Ticket</button></a></div>
</div>
</body>
</html>