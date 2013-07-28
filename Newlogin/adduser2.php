<?php
	include("db.php");
 	$a1=$_POST["fullname"];
	
	$a2=$_POST["employnum"];
	
	$a3=$_POST["phone"];
	
	$a4=$_POST["email"];
	
	$a5=$_POST["username"];
	
	$a6=$_POST["password"];
	
	$a7=$_POST["conpassword"];
	
	$a8=$_POST["select"];

	
	$qry=mysql_query("select * from login where employnumber='$a2'");
	
	while($row=mysql_fetch_array($qry)){
		$x=1;

	}	
	if($x==1){
		 echo "<script type=\"text/javascript\">".
        "alert('EmployNumber Already Exist');".
        "</script>";
 		echo"<script>"."window.location.href='home.php'"."</script>>";
	}else{
		

		mysql_query("insert into login values('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8')");
		mysql_close($con);
	  echo "<script type=\"text/javascript\">".
        "alert('success');".
        "</script>";
 		echo"<script>"."window.location.href='home.php'"."</script>>";
	}
?>