    $query="SELECT * FROM seats WHERE seat_booked='yes'";
	if($query_run=mysqli_query($db,$query)){
	     while($query_row=mysqli_fetch_assoc($query_run)){
			 $row=$query_row['seat_no.'];
			 echo "<script> document.getElementById(id).style.color = 'red';
                                    document.getElementById(id).style.backgroundColor='blue';</script>";
		 }
	}