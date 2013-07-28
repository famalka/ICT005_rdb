
    <html>
   <html xmlns="http://www.w3.org/1999/xhtml">
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
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Password Change</title>



</head>
    <body>
    
                  <h1>Change Password for </h1>
              

   
    <form method="POST" action="changepwdphp.php">
    <table cellpadding="10px">
    <tr>
    <td>Enter your UserName:</td>
    <td><input type="username" size="10" name="username"></td>
    </tr>
    <tr>
    <td>Enter your existing password:</td>
    <td width="265px"><input type="password" size="10" name="password"></td>
    </tr>
    <tr>
    <td>Enter your new password:</td>
    <td><input type="password" size="10" name="newpassword"></td>
    </tr>
    <tr>
    <td>Re-enter your new password:</td>
    <td><input type="password" size="10" name="confirmnewpassword"></td>
    </tr>
    </table>
    <p class="update_pas"><input type="submit" value="Update Password">
    </form>
    
 

</body>
</html>
