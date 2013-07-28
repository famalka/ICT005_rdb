<?php 
		$x1=$_POST["select2"];
		include("db.php");
$qry= mysql_query("select * from distribute where branch_name = '$x1'");
echo '<table width="350" border="1" cellpadding="1">';
				            
							echo "<tr>"."<td><b>"."Branch code"."</b></td><td><b>"."Branch Name"."</b></td><td><b>"."Item_Code"."</b></td><td><b>"."Item_Category"."</b></td><td><b>"."Distribute Date"."</b></td><td><b>"."Distributed Employ"."</b></td><td><b>"."Edit"."</b></td><td><b>"."Delete"."</b></td></tr>";
						  	while ($row= mysql_fetch_array($qry))
							{
								$x=$row["branch_code"];
								//$y=$row["branch_name"];
								echo "<tr>"."<td>".$row['branch_code']."</td><td>".$row['branch_name']."</td><td>".$row['item_code']."</td><td>".$row['item_category']."</td><td>".$row['dis_date']."</td><td>".$row['dis_by']."</td><td><a href='editdistribute2.php?id=$x'>".edit."</td><td><a href='deletedistribute3.php?id=$x'>".delete."</a></td></tr>";
							}
						     echo "</table>";
							 mysql_close($con);?>
	    <p><strong><a href="dis_search.php">Search Another Branch</a></strong></p>
	    <p><strong><a href="fpdf17/dis_search2.php?id=<?php echo $x1;?>" target="_blank">Print Distribution Details</a></strong></p></td>
