<?php

require('fpdf.php');
include("db1.php");
$x7=0.0001;$x8=0.000000000001;
$qry111= mysql_query("select * from season");



				         
						  	while ($row111= mysql_fetch_array($qry111))
							{
								$season=$row111['name'];	
							}

$a1=$_POST["select"];
$a2=$_POST["select2"];
$a4=$_POST["textfield"];
$a5=$_POST["textfield2"];
$d=date('d/m/y');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

$pdf->Cell(0,8,'SUNFROST (PVT) LTD',0,1,'C');
$pdf->Cell(0,5,$season,0,1,'C');
$pdf->Cell(0,8,'25, FROSTER LANE, COLOMBO 10.',0,1,'C');

$pdf->Cell(0,8,'CENTRE BANK SUMMARY FROM : '.$a4.' TO : '.$a5,0,1,'C');
$pdf->Cell(20,10,'',0,1,'C');
$pdf->Cell(10);

$pdf->Cell(20,10,'Date: ',0,0,'C');
$pdf->Cell(25,10,$d,0,0,'C');
$pdf->Cell(35,10,'',0,0,'C');
$pdf->Cell(25,10,' ',0,0,'C');
$pdf->Cell(25,10,'',0,0,'C');
$pdf->Cell(25,10,'Centre : ',0,0,'L');
$pdf->Cell(25,10,$a2,0,1,'C');

$pdf->Cell(10);
$pdf->Cell(180,10,'  ',0,1,'C');

$pdf->Cell(10);
$pdf->Cell(30,10,' Bank Code ',1,0,'C');
$pdf->Cell(90,10,' Bank Name ',1,0,'C');
$pdf->Cell(60,10,' Amount ',1,1,'C');

$qry2=mysql_query("select * from bank");

while($row2=mysql_fetch_array($qry2)){
	$totbank=0;
	$name=$row2['name'];
	$code=$row2['code'];
$qry=mysql_query("select * from payment where  end BETWEEN '$a4' AND '$a5'  AND centre='$a2'");	
	while($row=mysql_fetch_array($qry)){
		$farmer=$row['farmerno'];
		$qry3=mysql_query("select * from farmer where number='$farmer'");
		while($row3=mysql_fetch_array($qry3)){
			$bank=$row3['bank'];
		}
		if($name==$bank){
			$totbank=$totbank+$row['final'];	
		}
	}
	$pdf->SetFont('Arial','',12);
	if($totbank>0){
	$pdf->Cell(10);
	$pdf->Cell(30,10,$code,1,0,'C');
	$pdf->Cell(90,10,$name,1,0,'C');
	$pdf->Cell(60,10,number_format($totbank,2),1,1,'R');
	}
}

$qry4=mysql_query("select * from payment where end BETWEEN '$a4' AND '$a5'  AND centre='$a2' AND final!=0");	
while ($row4= mysql_fetch_array($qry4))
							{
							
							$fn=$row4['farmerno'];
								$qry21=mysql_query("select * from cashad where farmerno='$fn'");
								$qry22=mysql_query("select * from payment where farmerno='$fn'");							

							while ($row21= mysql_fetch_array($qry21))
							{
								$fnc=$row21['cashad'];
							}
							
							while ($row22= mysql_fetch_array($qry22))
							{
								$fncr=$fncr+$row22['cashrec'];
								$recs=$recs+$row22['recovery'];
							}
								$ia=$row4['ia1']+$row4['ia2'];
								$x8=$x8+$row4['gross'];
								$x9=$x9+$row4['tda'];
								$x10=$x10+$row4['qa'];
								
								$x12=$x12+$row4['recovery']+$row4['cashrec'];
								$x13=$x13+$row4['final'];
								$x15=$x15+$fncr+$recs;
								$x14=$x14+$row4['outstanding']+$fnc-$x15;
								
							}
							
	$qry5=mysql_query("select * from crop where centre='$a2' and date BETWEEN '$a4' AND '$a5'");							




while ($row5= mysql_fetch_array($qry5))
							{
								$x7=$x7+$row5['nettot'];						
							}
$pdf->SetFont('Arial','B',12);

$pdf->Cell(10);
$pdf->Cell(70,10,'',0,0,'L');						
$pdf->Cell(100,10,'',0,1,'C');	
$pdf->Cell(10);	
$pdf->Cell(70,10,'Innformation for Commercial Manager ',0,0,'L');						
$pdf->Cell(100,10,'',0,1,'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(10);	
$pdf->Cell(100,10,'Total colection for the period  ',0,0,'L');	
$pdf->Cell(20,10,' : Kgs',0,0,'L');						
$pdf->Cell(50,10,number_format($x7,2),0,1,'R');
$pdf->Cell(10);	
$pdf->Cell(100,10,'Farmer payment gross value  ',0,0,'L');	
$pdf->Cell(20,10,' : LKR',0,0,'L');						
$pdf->Cell(50,10,number_format($x8,2),0,1,'R');
$pdf->Cell(10);	
$pdf->Cell(100,10,'Recoveries for the period  ',0,0,'L');	
$pdf->Cell(20,10,' : LKR',0,0,'L');						
$pdf->Cell(50,10,number_format($x12,2),0,1,'R');
$pdf->Cell(10);	
$pdf->Cell(100,10,'Net payment  ',0,0,'L');	
$pdf->Cell(20,10,' : LKR',0,0,'L');						
$pdf->Cell(50,10,number_format($x13,2),0,1,'R');
$pdf->Cell(10);	
$pdf->Cell(100,10,'Total outstanding balance at the end of the period  ',0,0,'L');	
$pdf->Cell(20,10,' : LKR',0,0,'L');						
$pdf->Cell(50,10,number_format($x14,2),0,1,'R');
$pdf->Cell(10);	
$pdf->Cell(100,10,'Average farmer payment per kilo  ',0,0,'L');	
$pdf->Cell(20,10,' : LKR',0,0,'L');	
$xavg=	$x8/$x7;				
$pdf->Cell(50,10,number_format($xavg,2),0,1,'R');


$pdf->Cell(10);		
$pdf->Cell(170,10,'',0,1,'R');	
$pdf->Cell(10);						
$pdf->SetFont('Arial','B',10);	
$pdf->Cell(100,10,'',0,0,'R');						
$pdf->Cell(70,10,'_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ ',0,1,'C');

$pdf->Cell(10);		
$pdf->Cell(100,10,'',0,0,'R');						
$pdf->Cell(70,10,' Authorized By ',0,1,'C');


							
							
$pdf->Output();


?>