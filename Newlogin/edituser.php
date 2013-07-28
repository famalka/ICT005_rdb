<?php
session_start();


?>
 <?php

$logUser = NULL;
if(isset($_SESSION['uname']))
{
	$logUser = $_SESSION['uname'];
	//echo $logUser;
}
if($logUser == NULL)
{
	header("Location: " . "index.php" );
}
echo "You are logged :  ";
echo $_SESSION['uname'];
//print_r($_SESSION);
?>

<?php

	if($_SESSION['type']=="admin" )
				{
					$r=$_SESSION['user'];
					
				}else if($_SESSION['type']=="manager" )
				{
					 echo "<script type=\"text/javascript\">".
        "alert('You are not Authorized');".
        "</script>";
 		echo"<script>"."window.location.href='home.php'"."</script>>";
					
				}
				else
				{
					header("Location:index.php");
					 
				}
?>
<td colspan="8" rowspan="6"><strong>View, Edit or Remove Users</strong></br></br>
		   <?php 
		include("db.php");
$qry= mysql_query("select * from login");
echo '<table width="350" border="1" cellpadding="1">';
				            
							echo "<tr>"."<td><b>"."Fullname"."</b></td><td><b>"."EmployNumber"."</b></td><td><b>"."Phone"."</b></td><td><b>"."Email"."</b></td><td><b>"."Username"."</b></td><td><b>"."Password"."</b></td><td><b>"."Confirmed Password"."</b></td><td><b>"."Level"."</b></td><td><b>"."Edit"."</b></td><td><b>"."Delete"."</b></td></tr>";
						  	while ($row= mysql_fetch_array($qry))
							{
								$x=$row["employnumber"];
								echo "<tr>"."<td>".$row['fullname']."</td><td>".$row['employnumber']."</td><td>".$row['phone']."</td><td>".$row['email']."</td><td>".$row['username']."</td><td>".$row['password']."</td><td>".$row['con_password']."</td><td>".$row['level']."</td><td><a href='edituser22.php?id=$x'>".edit."</td>
								
								<td><a href=\"deleteuser.php?id=$x\" onclick=\"return confirm('Are you sure want to delete $row[fullname] with EmployNumber $row[employnumber]??');\">delete</a></td></tr>";
							}
						     echo "</table>";
							 mysql_close($con);?></td>