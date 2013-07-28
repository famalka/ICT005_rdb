<?php
	include("db.php");
 	$a1=$_POST["b_code"];
	
	$a2=$_POST["b_name"];
	
	$a3=$_POST["i_code"];
	
	$a4=$_POST["i_cat"];
	
	$a5=$_POST["d_date"];
	
	$a6=$_POST["d_b_id"];
	
	$qry=mysql_query("select * from distribute where item_code='$a3'");
	
	while($row=mysql_fetch_array($qry)){
		$x=1;

	}	
	if($x==1){
		 echo "<script type=\"text/javascript\">".
        "alert('This Item  Already Distributed');".
        "</script>";
 		echo"<script>"."window.location.href='dis_form.php'"."</script>>";
	}else{
		

		mysql_query("insert into distribute values('$a1','$a2','$a3','$a4','$a5','$a6')");
		mysql_close($con);
	  echo "<script type=\"text/javascript\">".
        "alert('success');".
        "</script>";
 		echo"<script>"."window.location.href='dis_form.php'"."</script>>";
	}
?>