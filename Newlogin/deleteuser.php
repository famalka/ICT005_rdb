<?php
	include("db.php");
 	$a1=$_GET["id"];
	

	mysql_query("delete from login where employnumber='$a1'");
	mysql_close($con);
 		 
	 echo "<script type=\"text/javascript\">".
        "alert('Successfully Deleted');".
        "</script>";
 		echo"<script>"."window.location.href='edituser.php'"."</script>>";
?>