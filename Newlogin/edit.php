 <?php
    session_start();
	$emp = $_GET['eid']; 
    include('db.php');
    $fname=$_POST['fname'];
    $emp=$_POST['emp'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
	$username=$_POST['username'];
	$level=$_POST['select'];
   
   mysql_query("UPDATE login set fullname='$fname',employnumber='$emp',phone='$phone',email='$email',username='$username',level='$level' WHERE employnumber='$emp'");
   mysql_close($con);
 	 echo "<script type=\"text/javascript\">".
        "alert('Successfully updated');".
        "</script>";
 		echo"<script>"."window.location.href='edituser.php'"."</script>>";
    ?>

