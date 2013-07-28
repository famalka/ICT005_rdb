<?php

require('fpdf.php');
include("db.php");


$y=$_GET["id"];


				        
				         
						  	

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);

$pdf->Cell(0,5,'RDB Bank',0,1,'C');
$pdf->Cell(0,5,$season,0,1,'C');
$pdf->Cell(0,5,'DISTRIBUTION DETAILS OF BRANCH '.$y,0,1,'C');
$pdf->Cell(20,10,'',0,1,'C');
$pdf->Cell(10);
$pdf->Cell(25,10,'Branch_code',1,0,'C');
$pdf->Cell(25,10,'Branch_name',1,0,'C');
$pdf->Cell(20,10,'Item_code',1,0,'C');
$pdf->Cell(30,10,'Item_category',1,0,'C');
$pdf->Cell(30,10,'Distributed_date',1,0,'C');
$pdf->Cell(40,10,'Distributed_employ',1,1,'C');


$pdf->SetFont('Arial','',8);
				
							

$qry= mysql_query("select * from distribute where branch_name LIKE '%$y%'");



				         
						  	while ($row= mysql_fetch_array($qry))
							{
								
									
								
								
				
								
								$pdf->Cell(10);
							$pdf->Cell(25,10,''.$row['branch_code'],1,0,'C');
							$pdf->Cell(25,10,''.$row['branch_name'],1,0,'C');
							$pdf->Cell(20,10,''.$row['item_code'],1,0,'C');
							$pdf->Cell(30,10,''.$row['item_category'],1,0,'C');
							$pdf->Cell(30,10,''.$row['dis_date'],1,0,'C');
							$pdf->Cell(40,10,''.$row['dis_by'],1,1,'C');
							
					
							}
									
				
							
							 mysql_close($con);
						
							
							
							
$pdf->Output();


?>