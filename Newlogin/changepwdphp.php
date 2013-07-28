    <?php
  	include("db.php");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $confirmnewpassword = $_POST['confirmnewpassword'];
    $result = mysql_query("SELECT password FROM login WHERE username='$username'");
    if(!$result)
    {
    echo "The username you entered does not exist";
    }
    else if($password!= mysql_result($result, 0))
    {
    echo "You entered an incorrect password";
    }
    if($newpassword=$confirmnewpassword)
    $sql=mysql_query("UPDATE login SET password='$newpassword' where username='$username'");
	$sql1=mysql_query("UPDATE login SET con_password='$newpassword' where username='$username'");
    if($sql)
    {
    echo "Congratulations You have successfully changed your password";
	 echo "<script type=\"text/javascript\">".
        "alert('Successfully changed your password');".
        "</script>";
 		echo"<script>"."window.location.href='home.php'"."</script>>";
    }
    else
    {
    echo "<script type=\"text/javascript\">".
        "alert('Unsuccessfull');".
        "</script>";
 		echo"<script>"."window.location.href='changepwd.php'"."</script>>";
    }
    ?>