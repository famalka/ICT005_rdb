<?php
	$con = mysql_connect("localhost","root","123"); // create connection
	if (!$con)
  {
  	die('Could not connect: ' . mysql_error());
  }
  
  mysql_select_db("newlogin", $con);// select database
 
?>
