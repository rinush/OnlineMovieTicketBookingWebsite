<?php
$db=mysqli_connect('localhost','root','','test');
include 'core.inc.php';
 echo '<html>
      <head>
	  <style>
	  table,tr{
      border-bottom: 2px solid red;
	  border-collapse: collapse;
	  position:relative;
	  margin-left:400px;
	  font-size:25px;
     }
     td{
      padding 10px;}
	  </style>
	  </head>
	  <body>
	  <h1 style="margin-left:450px; font-size:40px;">TICKET</h1>
	  <a href="logout.php" style="float:right; font-size:30px; font-weight:bold; margin-top:-50px;">Log Out</a>
      <table width="500" height="700">
		<tr height="40">
		<td width="150">Name</td>
		<td>'.$_SESSION["mname"].'</td>
		</tr>

		<tr>
		<td>Type</td>
		<td>'.$_SESSION["mtype"].'</td>
		</tr>

		<tr>
		<td>Amount</td>
		<td>'.$_SESSION["amount"].'/-</td>
		</tr>

		<tr>
		<td>Duration</td>
		<td>'.$_SESSION["mtime"].'</td>
		</tr>

		<tr>
		<td>No._of_Seats</td>
		<td style="position:relative; left:20px;">'.$_SESSION["seats"].'</td>
		</tr>

		<tr>
		<td>ShowTime</td>
		<td>'.$_SESSION["show_time"].'</td>
		</tr>
		
         <tr>
		 <td>Seat_No.</td>
		 <td>';
             for($i=0;$i<$_SESSION["seats"];$i++)
		     {	
	          echo $seatno=$_SESSION['seat_id'.$i];
			  if($i==($_SESSION["seats"]-1)){
				  echo ' ';
			  }
			  else{
				   echo ' , ';
			  }
        }
         echo '</td>
		 </tr>
         </table>
	     </body>
         </html>';
         //header('Location: mail.php');
?>
