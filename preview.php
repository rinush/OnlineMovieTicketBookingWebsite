<?php
$db=mysqli_connect('localhost','root','','test');
include 'core.inc.php';
require 'fpdf.php';
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(120,10,'Ticket',1,1,'C');
$pdf->Cell(60,10,'Name',1,0,'C');
$pdf->Cell(60,10,$_SESSION['mname'],1,1,'C');
$pdf->Cell(60,10,'Type',1,0,'C');
$pdf->Cell(60,10,$_SESSION['mtype'],1,1,'C');
$pdf->Cell(60,10,'Amount',1,0,'C');
$pdf->Cell(60,10,$_SESSION['amount'],1,1,'C');
$pdf->Cell(60,10,'Duration',1,0,'C');
$pdf->Cell(60,10,$_SESSION['mtime'],1,1,'C');
$pdf->Cell(60,10,'No._of_Seats',1,0,'C');
$pdf->Cell(60,10,$_SESSION['seats'],1,1,'C');
$pdf->Cell(60,10,'Seat_No.',1,0,'C');
for($i=0;$i<$_SESSION["seats"];$i++)
		     {	
	           $seatno=$_SESSION['seat_id'.$i];
			   if($i==($_SESSION["seats"]-1)){
				   $pdf->Cell(20,10,$seatno,1,1,'C');
			   } 
			   else{
			          $pdf->Cell(20,10,$seatno,1,0,'C');
			       }					  
             }
$pdf->Cell(60,10,'ShowTime',1,0,'C');
$pdf->Cell(60,10,$_SESSION['show_time'],1,1,'C');
$pdf->output();
?>
