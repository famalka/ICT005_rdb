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

	if($_SESSION['type']=="admin" )
				{
					$r=$_SESSION['user'];
					
				}else if($_SESSION['type']=="manager" )
				{
					header("Location:branches.php?id=you are not authorized");
					
				}
				else
				{
					header("Location:index.php");
					 
				}
?>


<form name="editform" method="post" action="editusersDB.php">

<table width="545" height="373" border="0">
    <tr>
      <td width="181" height="27">Full Name</td>
      <td width="348">
        <label>
          <input type="text" name="fullname" id="fullname" readonly value="<?php
                include("db.php");
				$x=$_GET["id"];
				echo $x;
				$qry=mysql_query("select fullname from login where username='$x'");
				while ($row= mysql_fetch_array($qry))
							{
								//echo $row['fullname'];
							}
				?>"/>
        </label>  </td>
    </tr>
     <tr>
      <td width="181" height="27">Employ Number</td>
      <td width="348">
        <label>
          <input type="text" name="employnum" id="employnum" readonly value="<?php
                include("db.php");
				$x=$_GET["id"];
			
				$qry=mysql_query("select employnumber from login where username='$x'");
				while ($row= mysql_fetch_array($qry))
							{
								echo $row['employnumber'];
							}
				?>"/>
        </label>   </td>
    </tr>
    
    <tr>
      <td height="25">Phone</td>
      <td>
        <label>
          <input type="text" name="phone" id="phone" readonly value="<?php
                include("db.php");
				$x=$_GET["id"];
			
				$qry=mysql_query("select * from login where username='$x'");
				while ($row= mysql_fetch_array($qry))
							{
								echo $row['phone'];
							}
				?>"/>
        </label>      </td>
    </tr>
    <tr>
      <td height="26">E-mail</td>
      <td>
        <label>
          <input type="text" name="email" id="email" readonly value="<?php
                include("db.php");
				$x=$_GET["id"];
		
				$qry=mysql_query("select * from login where username='$x'");
				while ($row= mysql_fetch_array($qry))
							{
								echo $row['email'];
							}
				?>"/>
        </label>      </td>
    </tr>
   
    <tr>
      <td height="28">User Name</td>
      <td>
        <label>
          <input type="text" name="username" id="username" readonly value="<?php
                include("db.php");
				$x=$_GET["id"];
				
				$qry=mysql_query("select * from login where username='$x'");
				while ($row= mysql_fetch_array($qry))
							{
								echo $row['username'];
							}
				?>"/>
        </label>      </td>
    </tr>
    <tr>
      <td height="27">Password</td>
      <td>
        <label>
          <input type="password" name="password" id="password" value="<?php
                include("db.php");
				$x=$_GET["id"];
				
				$qry=mysql_query("select * from login where username='$x'");
				while ($row= mysql_fetch_array($qry))
							{
								echo $row['password'];
							}
				?>"/>
        </label>      </td>
    </tr>
    <tr>
      <td height="27">Confirm Password</td>
      <td>
        <label>
          <input type="password" name="conpassword" id="conpassword" 
          value="<?php
                include("db.php");
				$x=$_GET["id"];
				
				$qry=mysql_query("select * from login where username='$x'");
				while ($row= mysql_fetch_array($qry))
							{
								echo $row['con_password'];
							}
				?>"/>
        </label>    </td>
    </tr>
   <tr>
      <td height="27">Level</td>
		      
		      <td><label for="select"></label>
		        <select name="select" id="select">
                <option value="<?php
                include("db.php");
				$x=$_GET["id"];
				
				$qry=mysql_query("select * from login where username='$x'");
				while ($row= mysql_fetch_array($qry))
							{
								echo $row['level'];
							}
				?>"><?php
                include("db.php");
				$x=$_GET["id"];
				
				$qry=mysql_query("select * from login where username='$x'");
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
		      <td><div align="center">
		        <input type="reset" name="Reset" id="button" value="Reset">
	          </div></td>
		      <td><input type="submit" name="button2" id="button2" value="Update User"></td>
	        </tr>
             </table>
  

	  </form>
