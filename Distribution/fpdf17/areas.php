<?php

require('fpdf.php');
include("db1.php");

$qry111= mysql_query("select * from season");



				         
						  	while ($row111= mysql_fetch_array($qry111))
							{
								$season=$row111['name'];	
							}

$qry111= mysql_query("select * from season");



				         
						  	while ($row111= mysql_fetch_array($qry111))
							{
								$season=$row111['name'];	
							}

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

$pdf->Cell(0,5,'SUNFROST (PVT) LTD',0,1,'C');
$pdf->Cell(0,5,$season,0,1,'C');
$pdf->Cell(0,5,'LIST OF PROJECTS',0,1,'C');
$pdf->Cell(20,10,'',0,1,'C');
$pdf->Cell(10);
$pdf->Cell(55,10,'Project ID',1,0,'C');
$pdf->Cell(55,10,'Project Name',1,0,'C');
$pdf->Cell(70,10,'Executive',1,1,'C');


$pdf->SetFont('Arial','',10);
				
							

$qry= mysql_query("select * from area");



				         
						  	while ($row= mysql_fetch_array($qry))
							{
								
									
								
								
				
								
								$pdf->Cell(10);
							$pdf->Cell(55,10,''.$row['id'],1,0,'C');
							$pdf->Cell(55,10,''.$row['name'],1,0,'C');
							$pdf->Cell(70,10,''.$row['executive'],1,1,'C');
				
					
							}
									
				
							
							 mysql_close($con);
						
							
							
							
$pdf->Output();


?>