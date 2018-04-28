<?php
$db=mysqli_connect('localhost','root','','test');
include 'core.inc.php';
if(!loggedin())
{
	echo '<h1>Please Login</h1>';
}
else
{
	
		
		 $payment_mode=$_SESSION['payment_mode'];
		 $user_id=$_SESSION['user_id'];
         $seats=$_SESSION['seats'];
         $amount=$_SESSION['amount'];
		 $show_time=$_SESSION['show_time'];
	     $query="SELECT * FROM theatre WHERE Show_Time='$show_time'";
		 
		 if($query_run=mysqli_query($db,$query)){
	     $rows=mysqli_num_rows($query_run);
	     if($query_row=mysqli_fetch_assoc($query_run)){
		  $seat_left=$query_row['seats_left'];
		  $seat_booked=$query_row['seats_booked'];
		  $seat_booked=$seat_booked+$seats;
		  $seat_left=$seat_left-$seats;
		  $query="UPDATE `theatre` SET `seats_booked` = '$seat_booked', `seats_left` = '$seat_left' WHERE `theatre`.`Show_Time` ='$show_time' ";
		  $query_run=mysqli_query($db,$query);
	  }
        for($i=0;$i<$seats;$i++)
		  {	
	        $seatno=$_SESSION['seat_id'.$i];
		    $query="UPDATE `seats` SET `email_id` = '$user_id', `seat_booked` = 'yes' WHERE `seats`.`seat_no.` = '$seatno' AND `Show_Time`='$show_time'";
			$query_run=mysqli_query($db,$query);
		  }
			
			if($i==$seats){ 
				echo 'Tickets Booked ';
			}
			else{
				echo 'Could not Book Tickets';
			}	
		}		 
		  $query="INSERT INTO booked_tickets VALUES ('','".mysqli_real_escape_string($db,$user_id)."','".mysqli_real_escape_string($db,$seats)."',
		    '".mysqli_real_escape_string($db,$amount)."','".mysqli_real_escape_string($db,$show_time)."')";
		}  
	if($query_run=mysqli_query($db,$query)){
				echo 'Successfully';
				header('Location: preview.php');
			}
			else{
				echo 'Could not Register';
			}	
	

?>