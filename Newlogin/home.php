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
<body>
<table>
<tr><td><a href="adduser.php">add new users</a></td></tr>

<tr><td><a href="edituser.php">View , Edit or Delete users</a></td></tr>

<tr><td><a href="changepwd.php">Change passsword</a></td></tr>

<tr><td><a href="logout.php">logout</a></td></tr>

</table>

</body>
