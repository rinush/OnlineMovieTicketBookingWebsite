<?php
$db=mysqli_connect('localhost','root','','test');
//include 'core.inc.php';
   if(isset($_POST['seats_selected']) && isset($_POST['amount_pay'])){
	if(!empty($_POST['seats_selected']) && !empty($_POST['amount_pay'])){
	 $seats=$_POST['seats_selected'];
	 $amount=$_POST['amount_pay'];
	 $_SESSION['seats']=$seats;
	 $_SESSION['amount']=$amount;	 
	}
   $j=0;
   for($i=1;$i<22;$i++)
   { 
      if(isset($_POST['txt'.$i]) && !empty($_POST['txt'.$i])){
	  $_SESSION['seat_id'.$j]=$_POST['txt'.$i];
	   $_SESSION['seat_id'.$j];
	  $j=$j+1;
	 }
   }
    $query="SELECT * FROM seats WHERE seat_booked='yes'";
	if($query_run=mysqli_query($db,$query)){
	     while($query_row=mysqli_fetch_assoc($query_run)){
			 $row=$query_row['seat_no.'];
		 }
	}
   header("Location: pc.php");
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
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
	font-weight:bold;
    cursor: pointer;
    float: left;
	margin:10px;
	border-radius:5px;	
}
.btn-group .button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}
.btn-group .button:hover {
    background-color: #f2f2f2;
}
</style>
</head>
<body onload="seatinitial()">
<script>
var count = [];
var seat_ini=[];
count_seat=0;
var seats=0;
for(var i=0;parseInt(i)<parseInt(100);i=parseInt(i)+parseInt(1))
{
  count[i]=parseInt(0);
}
function Change_Color(id,m,txt_id)
{
 count[m]=parseInt(count[m])+parseInt(1);
 if(parseInt(count[m])%parseInt(2)!=0){
 document.getElementById(id).style.color = 'red';
 document.getElementById(id).style.backgroundColor='blue';
 document.getElementById(txt_id).value=id;
 seats=parseInt(seats)+parseInt(1);
 } 
 else{
 document.getElementById(id).style.color = 'blue';
 document.getElementById(id).style.backgroundColor='white';
 document.getElementById(txt_id).value=''; 
 seats=parseInt(seats)-parseInt(1);
 }
}
function Count_Seats()
{
 document.getElementById('d8').value=seats;
 if(parseInt(seats)>0)
 {
  document.getElementById('pay').style.display='block';
 }
}
function Payment()
{
 var price_per_ticket=100;
 var net_amount=price_per_ticket*seats;
  document.getElementById('d10').value=net_amount;
  document.getElementById('payamount').style.display='block';
}
function seatinitial()
{      
	               "<?php 
	                $db=mysqli_connect('localhost','root','','test');
                    include 'core.inc.php';					
                      $query="SELECT * FROM seats WHERE seat_booked='yes'";
	                  if($query_run=mysqli_query($db,$query)){
	                  while($query_row=mysqli_fetch_assoc($query_run)){
			          $row=$query_row['seat_no.'];?>"
					  var seat="<?php echo $row;?>"
                      Change_Color_Ini(seat);				  
					  "<?php
					  }} ?>";
				  
                    
}
function Change_Color_Ini(seat_id)
{
 document.getElementById(seat_id).style.color = 'red';
 document.getElementById(seat_id).style.backgroundColor='blue';
 seat_ini[count_seat]=seat_id;
 count_seat=parseInt(count_seat)+parseInt(1);
}
function if_booked(seat_no,v_no,t_id)
{   
	var a,flag;
	var length=seat_ini.length;
	for(a=0;parseInt(a)<length;a=parseInt(a)+parseInt(1))
	{
		if(seat_ini[a]==seat_no){
			flag=1;
		}
	}
	if(flag!=1)
	{
		Change_Color(seat_no,v_no,t_id);
	}	
}
</script>
<ul>
<li><a href="C:/Users/rkg09/Desktop/New folder/MiniProject/home.html">HOME</a></li>
<li><a href="C:/Users/rkg09/Desktop/New folder/MiniProject/allmovies.html">ALL MOVIES</a></li>
<li><a href="C:/Users/rkg09/Desktop/New folder/MiniProject/booktickets.html">BOOK TICKETS</a></li>
<li><a href="C:/Users/rkg09/Desktop/New folder/MiniProject/register.html">REGISTER</a></li>
<li><a href="C:/Users/rkg09/Desktop/New folder/MiniProject/login.html">LOGIN</a></li>
<li><a href="C:/Users/rkg09/Desktop/New folder/MiniProject/contactus.html">CONTACT US</a></li>
</ul>
<div id="d2" style="width:950px; height:400px; position:relative; background-color:white;">
<table>

<tr>
<td>A</td>
<td><div class="btn-group">
 <form action="" method="POST">
 <input type="text" style="display:block;" id="txt1" name='txt1'><input type="button"  class="button" id="A1" onclick="if_booked(id,0,'txt1');" value="1"></div>
 </td>

<td><div class="btn-group">
 <input type="text" style="display:block;" id="txt2" name='txt2'><input type="button" class="button" id="A2" onclick="if_booked(id,1,'txt2');" value="2"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:block;" id="txt3" name='txt3'><input type="button" class="button" id="A3" onclick="Change_Color(id,2,'txt3')" value="3"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:block;" id="txt4" name='txt4'><input type="button" class="button" id="A4" onclick="Change_Color(id,3,'txt4')" value="4"></div>
</td>

<td><div class="btn-group">
  <button class="button" id="A5" onclick="Change_Color(id,4)">5</button></div>
</td>

<td><div class="btn-group">
  <button class="button" id="A6" onclick="Change_Color(id,5)">6</button></div>
</td>

<td><div class="btn-group">
  <button class="button" id="A7" onclick="Change_Color(id,6)">7</button></div>
</td>

<td><div class="btn-group">
  <button class="button" id="A8" onclick="Change_Color(id,7)">8</button></div>
</td>

<td><div class="btn-group">
  <button class="button" id="A9" onclick="Change_Color(id,8)">9</button></div>
</td>

<td><div class="btn-group">
  <button class="button" id="A10" onclick="Change_Color(id,9)">10</button></div>
</td>

<td><div class="btn-group">
  <button class="button" id="A11" onclick="Change_Color(id,10)">11</button></div>
</td>

</tr>

<tr>
<td>B</td>

<td><div class="btn-group">
  <button class="button" id="B2" onclick="Change_Color(id,11)">12</button></div>
</td>

<td><div class="btn-group">
  <button class="button" id="B3" onclick="Change_Color(id,12)">13</button></div>
</td>

<td><div class="btn-group">
  <button class="button" id="B4" onclick="Change_Color(id,13)">14</button></div>
</td>

<td><div class="btn-group">
  <button class="button" id="B5" onclick="Change_Color(id,14)">15</button></div>
</td>

<td><div class="btn-group">
  <button class="button" id="B6" onclick="Change_Color(id,15)">16</button></div>
</td>

<td><div class="btn-group">
  <button class="button" id="B7" onclick="Change_Color(id,16)">17</button></div>
</td>

<td><div class="btn-group">
  <button class="button" id="B8" onclick="Change_Color(id,17)">18</button></div>
</td>

<td><div class="btn-group">
  <button class="button" id="B9" onclick="Change_Color(id,18)">19</button></div>
</td>

<td><div class="btn-group">
  <button class="button" id="B10" onclick="Change_Color(id,19)">20</button></div>
</td>

<td><div class="btn-group">
  <button class="button" id="B11" onclick="Change_Color(id,20)">21</button></div>
</td>

<td><div class="btn-group">
  <button class="button" id="B11" onclick="Change_Color(id,21)">22</button></div>
</td>

</tr>

</table>

<input type="button" style="background-color:red; height:50px; width:200px; border:1px solid black; border-radius:5px; margin-left:200px;" onclick="Count_Seats()" value="Submit">
<input type="text" id="d8" name="seats_selected">
<input type="button" id="pay" style="background-color:red; height:50px; display:none; width:200px; border:1px solid black; border-radius:5px; margin-left:200px;" onclick="Payment()" value="Pay">
<input type="text" name="amount_pay" id="d10">
<input type="submit" id="payamount" style="background-color:red; height:50px; display:none; width:200px; border:1px solid black; border-radius:5px; margin-left:200px;" value="PROCEED">
</form>
 <a href="logout.php">Logout</a>
</div>
</body>
</html>