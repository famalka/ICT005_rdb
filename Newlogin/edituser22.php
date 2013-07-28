<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
$emp = $_GET['id']; 
 include('db.php');

 
 $sql="SELECT * FROM login where employnumber= '$emp' ";
 $result=mysql_query($sql);
while($row = mysql_fetch_array($result))
    {
        $fname=$row['fullname'];
		$emp=$row['employnumber'];
		$phone=$row['phone'];
		$email=$row['email'];  
		$username=$row['username'];
		$level=$row['level'];    
    }

?>
</head>

<body>
<form action="edit.php?eid=<?php echo $emp;?>" name="edit" id="edit" method="post">
<table width="516" border="1">
  <tr>
    <th width="184" height="34" scope="row"><div align="left">Fullname</div></th>
    <td width="316"><input name="fname" id="fname" type="text" size="30" value="<?php echo $fname; ?>" /></td>
  </tr>
  <tr>
    <th height="33" scope="row"><div align="left">Employ Number</div></th>
    <td><input name="emp" id="emp" type="text" size="30" value="<?php echo $emp; ?>" /></td>
  </tr>
   <tr>
    <th height="33" scope="row"><div align="left">Phone</div></th>
    <td><input name="phone" id="phone" type="text" size="30" value="<?php echo $phone; ?>" /></td>
  </tr>
   <tr>
    <th height="33" scope="row"><div align="left">Email</div></th>
    <td><input name="email" id="email" type="text" size="30" value="<?php echo $email; ?>" /></td>
  </tr>
  <tr>
    <th height="35" scope="row"><div align="left">username</div></th>
    <td><input name="username" id="username" type="text" size="30" value="<?php echo $username ?>" /></td>
  </tr>
  <tr>
  <th height="33" scope="row"><div align="left">Employ Level</div></th>
  <td>
  
		        <select name="select" id="select">
                <option value="<?php
                include("db.php");
				$x=$_GET["id"];
				
				$qry=mysql_query("select * from login where employnumber='$x'");
				while ($row= mysql_fetch_array($qry))
							{
								echo $row['level'];
							}
				?>"><?php
                include("db.php");
				$x=$_GET["id"];
				
				$qry=mysql_query("select * from login where employnumber='$x'");
				while ($row= mysql_fetch_array($qry))
							{
								echo $row['level'];
							}
				?></option>
		          <option value="admin">admin</option>
		          <option value="manager">manager</option>
		          
              </select> </td>
              </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><label>
        <input type="submit" name="submit" id="submit" value="Edit Profile" />
    </label></td>
  </tr>
</table>

</form>
</body>

</html>
