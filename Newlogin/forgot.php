
    <html>
   <html xmlns="http://www.w3.org/1999/xhtml">
   <?php
session_start();

?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Password Change</title>



</head>
    <body>
    
                  <h1>Change Password for </h1>
              

   
    <form method="POST" action="forgotphp.php">
    <table cellpadding="10px">
    <tr>
    <td>Enter your UserName:</td>
    <td><input type="username" size="10" name="username"></td>
    </tr>
    <tr>
    <td>Enter your email:</td>
    <td width="265px"><input type="text" size="10" name="email"></td>
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
