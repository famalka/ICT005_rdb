<?php

require('fpdf.php');
include("db1.php");

$qry111= mysql_query("select * from season");



				         
						  	while ($row111= mysql_fetch_array($qry111))
							{
								$season=$row111['name'];	
							}

$a1=$_POST["select"];
$a2=$_POST["select2"];
$a3=$_POST["select3"];
$a4=$_POST["textfield"];
$a5=$_POST["textfield2"];
$d=date('d/m/y');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

$pdf->Cell(0,8,'SUNFROST (PVT) LTD',0,1,'C');
$pdf->Cell(0,5,$season,0,1,'C');
$pdf->Cell(0,8,'25, FROSTER LANE, COLOMBO 10.',0,1,'C');

$pdf->Cell(0,8,'CENTRE BANK STATEMENT FROM : '.$a4.' TO : '.$a5,0,1,'C');
$pdf->Cell(20,10,'',0,1,'C');
$pdf->Cell(10);

$pdf->Cell(20,10,'Date: ',0,0,'L');
$pdf->Cell(25,10,$d,0,0,'L');
$pdf->Cell(35,10,'',0,0,'C');
$pdf->Cell(25,10,' ',0,0,'C');
$pdf->Cell(25,10,'Centre : ',0,0,'L');
$pdf->Cell(50,10,$a2,0,1,'L');


$qry2=mysql_query("select * from branch");

while($row2=mysql_fetch_array($qry2)){
	$x=0;
	$qry=mysql_query("select * from payment where  end BETWEEN '$a4' AND '$a5'  AND centre='$a2'");	
	$qry11=mysql_query("select * from payment where  end BETWEEN '$a4' AND '$a5'  AND centre='$a2'");	
	$name=$row2['name'];
	$bank=$row2['bank'];
	while($row11=mysql_fetch_array($qry11)){
		$farmer=$row11['farmerno'];
		$qry13=mysql_query("select * from farmer where number='$farmer' AND branch='$name' AND bank='$bank'");
		
		while($row13=mysql_fetch_array($qry13)){
			if($row11['final']>0){
				$x=1;	
			}
		}
	}
if($x==1){	
	$pdf->Cell(10);
$pdf->Cell(20,10,'Bank : ',0,0,'L');
$pdf->Cell(60,10,$bank,0,0,'L');
$pdf->Cell(25,10,' ',0,0,'L');
$pdf->Cell(25,10,'Branch : ',0,0,'L');
$pdf->Cell(50,10,$name,0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->Cell(10);
$pdf->Cell(180,10,'Dear Sir / Madam, ',0,1,'L');
$pdf->Cell(10);
$pdf->Cell(180,10,'    Please find enclosed here with cheque / bank draft no ______________________________',0,1,'L');
$pdf->Cell(10);
$pdf->Cell(180,10,'for Rs. ______________. Please credit the following accounts with you. ',0,1,'L');
$pdf->Cell(10);
$pdf->Cell(170,10,'',0,1,'C');
$pdf->Cell(10);
$pdf->Cell(20,10,'No:',1,0,'C');
$pdf->Cell(50,10,'Name',1,0,'C');
$pdf->Cell(60,10,'Account No : ',1,0,'C');
$pdf->Cell(50,10,'Amount',1,1,'C');
	while($row=mysql_fetch_array($qry)){
		$farmer=$row['farmerno'];
		$qry3=mysql_query("select * from farmer where number='$farmer' AND branch='$name' AND bank='$bank'");
		
		while($row3=mysql_fetch_array($qry3)){
			
			$pdf->SetFont('Arial','B',10);
$pdf->Cell(10);
$pdf->Cell(20,10,$row3['number'],1,0,'C');
$pdf->Cell(50,10,$row3['acholder'],1,0,'C');
$pdf->Cell(60,10,$row3['acno'],1,0,'C');
$pdf->Cell(50,10,number_format($row['final']-$row['cashrec'],2),1,1,'R');
		}
	}
	
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',12);

$pdf->Cell(0,8,'SUNFROST (PVT) LTD',0,1,'C');
$pdf->Cell(0,5,$season,0,1,'C');
$pdf->Cell(0,8,'25, FROSTER LANE, COLOMBO 10.',0,1,'C');

$pdf->Cell(0,8,'CENTRE BANK STATEMENT FROM : '.$a4.' TO : '.$a5,0,1,'C');
$pdf->Cell(20,10,'',0,1,'C');
}else{
	continue;	
}

}







$pdf->SetFont('Arial','',10);
				
							


							
							
$pdf->Output();


?>