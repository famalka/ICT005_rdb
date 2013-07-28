<?php
session_start();
$_SESSION['uname']=NULL;
session_destroy(); //ends the current session

header("Location: " . "index.php" );

?>