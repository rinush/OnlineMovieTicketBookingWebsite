<?php
$db=mysqli_connect('localhost','root','','test');
include 'core.inc.php';
	if(isset($_POST['cardnumber'])&& isset($_POST['cardholder']) && $_POST['cardexpirydate'] && $_POST['cvc_cvv'])
	{
		if(!empty($_POST['cardnumber'])&& !empty($_POST['cardholder']) && !empty($_POST['cardexpirydate']) && !empty($_POST['cvc_cvv']))
	    {
		 //$payment_mode=$_SESSION['payment_mode'];
		 //$user_id=$_SESSION['user_id'];
         //$seats=$_SESSION['seats'];
         //$amount=$_SESSION['amount'];
         //$showtime=$_SESSION['show_time'];	
		 $seat_booked='yes';
		 $show_time=$_SESSION['show_time'];
	     $query="SELECT * FROM theatre WHERE Show_Time='$show_time'";
		 if($query_run=mysqli_query($db,$query)){
	     $rows=mysqli_num_rows($query_run);
	     if($query_row=mysqli_fetch_assoc($query_run)){
		  $seat_left=$query_row['seats_left'];
		  $seat_booked=$query_row['seats_booked'];
		  $seat_booked=$seat_booked+2;
		  $seat_left=$seat_left-2;
		  $query="UPDATE `theatre` SET `seats_booked` = '$seat_booked', `seats_left` = '$seat_left' WHERE `theatre`.`Show_Time` ='8:30 AM' ";
		  $query_run=mysqli_query($db,$query);
	  }
        for($i=0;$i<2;$i++)
		  {	$seatno=$_SESSION['seat_id'.$i];
		    $query="UPDATE `seats` SET `email_id` = 'pooja123@gmail.com', `seat_booked` = 'yes' WHERE `seats`.`seat_no.` = '$seatno'";
			$query_run=mysqli_query($db,$query);
		  }
			
			if($i==2){
				echo 'Tickets Booked';
			}
			else{
				echo 'Could not Book Tickets';
			}	
		}}
		 
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
<li><a href="C:/Users/rkg09/Desktop/New folder/MiniProject/home.html">HOME</a></li>
<li><a href="C:/Users/rkg09/Desktop/New folder/MiniProject/allmovies.html">ALL MOVIES</a></li>
<li><a href="C:/Users/rkg09/Desktop/New folder/MiniProject/booktickets.html">BOOK TICKETS</a></li>
<li><a href="C:/Users/rkg09/Desktop/New folder/MiniProject/register.html">REGISTER</a></li>
<li><a href="C:/Users/rkg09/Desktop/New folder/MiniProject/login.html">LOGIN</a></li>
<li><a href="C:/Users/rkg09/Desktop/New folder/MiniProject/contactus.html">CONTACT US</a></li>
</ul>
<div id="d2" style="width:950px; height:400px; position:relative; background-color:white;">
<form action="" method="POST">
 <div class="a" style="float:left;">CREDIT CARD No.<br><input type="number"  name="cardnumber"></div>
 <div class="a" style="float:left;">CARD HOLDER<br><input type="text" name="cardholder"></div>
 <div class="a" style="float:left;">Card Expiry Date<br><input type="date"  name="cardexpirydate"></div>
 <div class="a" style="float:left;">CVC-CVV<br><input type="text"  name="cvc_cvv"></div>
 <div class="b" style="float:left;"><input type="reset"></div>
 <div class="b" style="float:left;"><input type="submit"></div>
 <a href="logout.php">Logout</a>
</form>
</div>
</body>
</html>