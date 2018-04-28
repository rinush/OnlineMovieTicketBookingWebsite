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
<div id="d2" style="width:950px; height:900px; position:relative; background-color:white;">
<table width="900" height="800">
<form action="" method="POST">

<tr>

<th>Movie Name</th>

<th>Rating</th>

</tr>

<tr height="75">
<td width="150">Chef</td>
<td>
<span class="fa fa-star" id="a1" onclick="Change_Color(id,0)"></span>
<span class="fa fa-star" id="a2" onclick="Change_Color(id,1)"></span>
<span class="fa fa-star" id="a3" onclick="Change_Color(id,2)"></span>
<span class="fa fa-star" id="a4" onclick="Change_Color(id,3)"></span>
<span class="fa fa-star" id="a5" onclick="Change_Color(id,4)"></span>
</td>
</tr>

<tr>
<td>Bareilly Ki Barfi</td>
<td>
<span class="fa fa-star" id="a6" onclick="Change_Color(id,5)"></span>
<span class="fa fa-star" id="a7" onclick="Change_Color(id,6)"></span>
<span class="fa fa-star" id="a8" onclick="Change_Color(id,7)"></span>
<span class="fa fa-star" id="a9" onclick="Change_Color(id,8)"></span>
<span class="fa fa-star" id="a10" onclick="Change_Color(id,9)"></span>
</td>
</tr>

<tr>
<td>Golmaal4</td>
<td>
<span class="fa fa-star" id="a11" onclick="Change_Color(id,10)"></span>
<span class="fa fa-star" id="a12" onclick="Change_Color(id,11)"></span>
<span class="fa fa-star" id="a13" onclick="Change_Color(id,12)"></span>
<span class="fa fa-star" id="a14" onclick="Change_Color(id,13)"></span>
<span class="fa fa-star" id="a15" onclick="Change_Color(id,14)"></span>
</td>
</tr>

<tr>
<td>Padmavati</td>
<td>
<span class="fa fa-star" id="a16" onclick="Change_Color(id,15)"></span>
<span class="fa fa-star" id="a17" onclick="Change_Color(id,16)"></span>
<span class="fa fa-star" id="a18" onclick="Change_Color(id,17)"></span>
<span class="fa fa-star" id="a19" onclick="Change_Color(id,18)"></span>
<span class="fa fa-star" id="a20" onclick="Change_Color(id,19)"></span>
</td>
</tr>

<tr>
<td>Hindi Medium</td>
<td>
<span class="fa fa-star" id="a21" onclick="Change_Color(id,20)"></span>
<span class="fa fa-star" id="a22" onclick="Change_Color(id,21)"></span>
<span class="fa fa-star" id="a23" onclick="Change_Color(id,22)"></span>
<span class="fa fa-star" id="a24" onclick="Change_Color(id,23)"></span>
<span class="fa fa-star" id="a25" onclick="Change_Color(id,24)"></span>
</td>
</tr>

<tr>
<td>Raees</td>
<td>
<span class="fa fa-star" id="a26" onclick="Change_Color(id,25)"></span>
<span class="fa fa-star" id="a27" onclick="Change_Color(id,26)"></span>
<span class="fa fa-star" id="a28" onclick="Change_Color(id,27)"></span>
<span class="fa fa-star" id="a29" onclick="Change_Color(id,28)"></span>
<span class="fa fa-star" id="a30" onclick="Change_Color(id,29)"></span>
</td>
</tr>

</table>
</div>
<script>
<?php
$db=mysqli_connect('localhost','root','','test');
include 'core.inc.php';
$sum=0;
$count=0;
$query="SELECT * FROM `reviews` WHERE `Movie_Name`='Chef'";
if($query_run=mysqli_query($db,$query)){
	while($query_row=mysqli_fetch_assoc($query_run)){
		 $var=$query_row['star_rating'];
		 $sum = $sum + $var;
		 $count++;
	}?>
var i=<?php echo floor($sum=$sum/$count);}?>;
var j;
for(j=1;parseInt(j)<=parseInt(i)+parseInt(1);j=parseInt(j)+parseInt(1)){
	document.getElementById("a"+j).style.color="orange";
}

<?php
$sum=0;
$count=0;
$query="SELECT * FROM `reviews` WHERE `Movie_Name`='Bareilly Ki Barfi'";
if($query_run=mysqli_query($db,$query)){
	while($query_row=mysqli_fetch_assoc($query_run)){
		 $var=$query_row['star_rating'];
		 $sum = $sum + $var;
		 $count++;
	}?>
i=<?php echo floor($sum=$sum/$count);}?>;
for(j=6;parseInt(j)<=parseInt(i)+parseInt(5);j=parseInt(j)+parseInt(1)){
	document.getElementById("a"+j).style.color="orange";
}

<?php
$sum=0;
$count=0;
$query="SELECT * FROM `reviews` WHERE `Movie_Name`='Golmaal4'";
if($query_run=mysqli_query($db,$query)){
	while($query_row=mysqli_fetch_assoc($query_run)){
		 $var=$query_row['star_rating'];
		 $sum = $sum + $var;
		 $count++;
	}?>
i=<?php echo floor($sum=$sum/$count);}?>;
for(j=11;parseInt(j)<=parseInt(i)+parseInt(10);j=parseInt(j)+parseInt(1)){
	document.getElementById("a"+j).style.color="orange";
}

<?php
$sum=0;
$count=0;
$query="SELECT * FROM `reviews` WHERE `Movie_Name`='Padmavati'";
if($query_run=mysqli_query($db,$query)){
	while($query_row=mysqli_fetch_assoc($query_run)){
		 $var=$query_row['star_rating'];
		 $sum = $sum + $var;
		 $count++;
	}?>
 i=<?php echo floor($sum=$sum/$count);}?>;
for(j=16;parseInt(j)<=parseInt(i)+parseInt(15);j=parseInt(j)+parseInt(1)){
	document.getElementById("a"+j).style.color="orange";
}

<?php
$sum=0;
$count=0;
$query="SELECT * FROM `reviews` WHERE `Movie_Name`='Hindi Medium'";
if($query_run=mysqli_query($db,$query)){
	while($query_row=mysqli_fetch_assoc($query_run)){
		 $var=$query_row['star_rating'];
		 $sum = $sum + $var;
		 $count++;
	}?>
i=<?php echo floor($sum=$sum/$count);}?>;
for(j=21;parseInt(j)<=parseInt(i)+parseInt(20);j=parseInt(j)+parseInt(1)){
	document.getElementById("a"+j).style.color="orange";
}

<?php
$sum=0;
$count=0;
$query="SELECT * FROM `reviews` WHERE `Movie_Name`='Raees'";
if($query_run=mysqli_query($db,$query)){
	while($query_row=mysqli_fetch_assoc($query_run)){
		 $var=$query_row['star_rating'];
		 $sum = $sum + $var;
		 $count++;
	}?>
i=<?php echo floor($sum=$sum/$count);}?>;
for(j=26;parseInt(j)<=parseInt(i)+parseInt(25);j=parseInt(j)+parseInt(1)){
	document.getElementById("a"+j).style.color="orange";
}

</script>
<!--<script>
var count = [];
for(var i=0;parseInt(i)<parseInt(100);i=parseInt(i)+parseInt(1))
{
  count[i]=parseInt(0);
}
function Change_Color(id,m)
{
 count[m]=parseInt(count[m])+parseInt(1);
 if(parseInt(count[m])%parseInt(2)!=0){
 document.getElementById(id).style.color='orange';

 } 
 else{
 document.getElementById(id).style.color='black';
 }
}
</script>-->
</body>
</html>