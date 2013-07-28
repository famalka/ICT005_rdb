<?php
session_start();
include("db.php");


@$no_1=$_POST["username"];
@$no_2=$_POST["password"];
$result = mysql_query("SELECT * FROM login WHERE username = '$no_1' && password='$no_2'");

?>
<?php if($row = mysql_fetch_array($result)  )
  {
  
	  session_register("uname");
		$_SESSION['uname'] = $row['fullname'];
		echo $_SESSION['uname'];	
	  $_SESSION['type']=$row['level'];
	  $_SESSION['user']=$no_1;

	  if( $_SESSION['type']=="admin"||"manager")
	  {
	   echo "<script type=\"text/javascript\">".
        "alert('Successfully Logged');".
        "</script>";
 		echo"<script>"."window.location.href='home.php'"."</script>>";
	 }

		
  }else {  
  	 
	 echo "<script type=\"text/javascript\">".
        "alert('Incorrect Username or Password');".
        "</script>";
 		echo"<script>"."window.location.href='index.php'"."</script>>";
  }

?>
  

