<?php
$db=mysqli_connect('localhost','root','','test');
include 'core.inc.php'; 	
if(!loggedin())
{
	echo '<h1>Please Login</h1>';
}
else
{
   if(isset($_POST['seats_selected']) && isset($_POST['amount_pay'])){
	if(!empty($_POST['seats_selected']) && !empty($_POST['amount_pay'])){
	 $seats=$_POST['seats_selected'];
	 $amount=$_POST['amount_pay'];
	 $_SESSION['seats']=$seats;
	 $_SESSION['amount']=$amount;
     $j=0;
     for($i=1;$i<=44;$i++)
     { 
      if(isset($_POST['txt'.$i]) && !empty($_POST['txt'.$i])){
	    $_SESSION['seat_id'.$j]=$_POST['txt'.$i];
	    $_SESSION['seat_id'.$j];
	    $j=$j+1;
	   }
     }
	   header('Location: payment.php');
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
#e2{
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
<ul>
<li><a href="home.html">HOME</a></li>
<li><a href="allmovies.php">ALL MOVIES</a></li>
<li><a href="booktickets.php">BOOK TICKETS</a></li>
<li><a href="register.php">REGISTER</a></li>
<li><a href="login.php">LOGIN</a></li>
<li><a href="contactus.php">CONTACT US</a></li>
</ul>
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
  seats=parseInt(seats)+parseInt(1);
 document.getElementById(txt_id).value=id;
 } 
 else{
 document.getElementById(id).style.color = 'blue';
 document.getElementById(id).style.backgroundColor='white';
 seats=parseInt(seats)-parseInt(1);
 document.getElementById(txt_id).value=''; 
 }
}
function Count_Seats()
{
 document.getElementById('e8').value=seats;
 if(parseInt(seats)>0)
 {
  document.getElementById('pay').style.display='block';
 }
}
function Payment()
{
 var price_per_ticket=100;
 var net_amount=price_per_ticket*seats;
  document.getElementById('e10').value=net_amount;
  document.getElementById('payamount').style.display='block';
  document.getElementById('pay').value=net_amount+'/-';
}
function seatinitial()
{      
	               "<?php 
	                  $db=mysqli_connect('localhost','root','','test');	
                      echo $showtime=$_SESSION['show_time'];					  
                      $query="SELECT * FROM seats WHERE seat_booked='yes' AND Show_Time='$showtime'";
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
function Reset(){
	location.reload();
}
</script>

<div id="e2" style="width:950px; height:500px; position:relative; background-color:white;">
 <a href="logout.php" style="float:right;">Logout</a>
<table>
<form action="" method="POST">
<tr>
<td>A</td>
<td>
<div class="btn-group">
<input type="text" style="display:none;" id="txt1" name='txt1'><input type="button" class="button" id="A1" onclick="if_booked(id,0,'txt1');" value="01"></div>
</td>

<td><div class="btn-group">
 <input type="text" style="display:none;" id="txt2" name='txt2'><input type="button" class="button" id="A2" onclick="if_booked(id,1,'txt2');" value="02"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt3" name='txt3'><input type="button" class="button" id="A3" onclick="if_booked(id,2,'txt3')" value="03"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt4" name='txt4'><input type="button" class="button" id="A4" onclick="if_booked(id,3,'txt4')" value="04"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt5" name='txt5'><input type="button" class="button" id="A5" onclick="if_booked(id,4,'txt5')" value="05"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt6" name='txt6'><input type="button" class="button" id="A6" onclick="if_booked(id,5,'txt6')" value="06"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt7" name='txt7'><input type="button" class="button" id="A7" onclick="if_booked(id,6,'txt7')" value="07"></div>
</td>

<td><div class="btn-group">  
  <input type="text" style="display:none;" id="txt8" name='txt8'><input type="button" class="button" id="A8" onclick="if_booked(id,7,'txt8')" value="08"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt9" name='txt9'><input type="button" class="button" id="A9" onclick="if_booked(id,8,'txt9')" value="09"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt10" name='txt10'><input type="button" class="button" id="A10" onclick="if_booked(id,9,'txt10')" value="10"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt11" name='txt11'><input type="button" class="button" id="A11" onclick="if_booked(id,10,'txt11')" value="11"></div>
</td>

</tr>

<tr>
<td>B</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt12" name='txt12'><input type="button" class="button" id="B1" onclick="if_booked(id,11,'txt12')" value="12"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt13" name='txt13'><input type="button" class="button" id="B2" onclick="if_booked(id,12,'txt13')" value="13"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt14" name='txt14'><input type="button" class="button" id="B3" onclick="if_booked(id,13,'txt14')" value="14"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt15" name='txt15'><input type="button" class="button" id="B4" onclick="if_booked(id,14,'txt15')" value="15"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt16" name='txt16'><input type="button" class="button" id="B5" onclick="if_booked(id,15,'txt16')" value="16"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt17" name='txt17'><input type="button" class="button" id="B6" onclick="if_booked(id,16,'txt17')" value="17"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt18" name='txt18'><input type="button" class="button" id="B7" onclick="if_booked(id,17,'txt18')" value="18"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt19" name='txt19'><input type="button" class="button" id="B8" onclick="if_booked(id,18,'txt19')" value="19"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt20" name='txt20'><input type="button" class="button" id="B9" onclick="if_booked(id,19,'txt20')" value="20"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt21" name='txt21'><input type="button" class="button" id="B10" onclick="if_booked(id,20,'txt21')" value="21"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt22" name='txt22'><input type="button" class="button" id="B11" onclick="if_booked(id,21,'txt22')" value="22"></div>
</td>

</tr>

<tr>
<td>C</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt23" name='txt23'><input type="button" class="button" id="C1" onclick="if_booked(id,22,'txt23')" value="23"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt24" name='txt24'><input type="button" class="button" id="C2" onclick="if_booked(id,23,'txt24')" value="24"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt25" name='txt25'><input type="button" class="button" id="C3" onclick="if_booked(id,24,'txt25')" value="25"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt26" name='txt26'><input type="button" class="button" id="C4" onclick="if_booked(id,25,'txt26')" value="26"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt27" name='txt27'><input type="button" class="button" id="C5" onclick="if_booked(id,26,'txt27')" value="27"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt28" name='txt28'><input type="button" class="button" id="C6" onclick="if_booked(id,27,'txt28')" value="28"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt29" name='txt29'><input type="button" class="button" id="C7" onclick="if_booked(id,28,'txt29')" value="29"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt30" name='txt30'><input type="button" class="button" id="C8" onclick="if_booked(id,29,'txt30')" value="30"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt31" name='txt31'><input type="button" class="button" id="C9" onclick="if_booked(id,30,'txt31')" value="31"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt32" name='txt32'><input type="button" class="button" id="C10" onclick="if_booked(id,31,'txt32')" value="32"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt33" name='txt33'><input type="button" class="button" id="C11" onclick="if_booked(id,32,'txt33')" value="33"></div>
</td>

</tr>

<tr>
<td>D</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt34" name='txt34'><input type="button" class="button" id="D1" onclick="if_booked(id,33,'txt34')" value="34"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt35" name='txt35'><input type="button" class="button" id="D2" onclick="if_booked(id,34,'txt35')" value="35"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt36" name='txt36'><input type="button" class="button" id="D3" onclick="if_booked(id,35,'txt36')" value="36"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt37" name='txt37'><input type="button" class="button" id="D4" onclick="if_booked(id,36,'txt37')" value="37"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt38" name='txt38'><input type="button" class="button" id="D5" onclick="if_booked(id,37,'txt38')" value="38"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt39" name='txt39'><input type="button" class="button" id="D6" onclick="if_booked(id,38,'txt39')" value="39"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt40" name='txt40'><input type="button" class="button" id="D7" onclick="if_booked(id,39,'txt40')" value="40"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt41" name='txt41'><input type="button" class="button" id="D8" onclick="if_booked(id,40,'txt41')" value="41"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt42" name='txt42'><input type="button" class="button" id="D9" onclick="if_booked(id,41,'txt42')" value="42"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt43" name='txt43'><input type="button" class="button" id="D10" onclick="if_booked(id,42,'txt43')" value="43"></div>
</td>

<td><div class="btn-group">
  <input type="text" style="display:none;" id="txt44" name='txt44'><input type="button" class="button" id="D11" onclick="if_booked(id,43,'txt44')" value="44"></div>
</td>

</tr>

</table>
<input type="button" style="background-color:red; height:50px; width:200px; border:1px solid black; border-radius:5px; margin-left:100px; margin-top:10px;" onclick="Reset()" value="Reset">
<input type="button" style="background-color:red; height:50px; width:200px; border:1px solid black; border-radius:5px; margin-left:100px; margin-top:10px;" onclick="Count_Seats()" value="BOOK SEATS">
<input type="text" id="e8" name="seats_selected" style="display:none;">
<input type="button" id="pay" style="background-color:red; height:50px; display:none; width:200px; border:1px solid black; border-radius:5px; margin-left:200px; margin-top:10px;" onclick="Payment()" value="Amount To Pay">
<input type="text" name="amount_pay" id="e10" style="display:none;">
<input type="submit" id="payamount" style="background-color:red; height:50px; display:none; width:200px; border:1px solid black; border-radius:5px; margin-left:200px; margin-top:10px;" value="PROCEED">
</form>
</div>
</body>
</html>