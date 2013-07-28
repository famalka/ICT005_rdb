<?php

include("db.php");
$email = $_POST['email'] ; 
  
$sql = mysql_query("SELECT * FROM login where email = '$email'") 
or die(mysql_error());  
$row = mysql_fetch_array($sql);
$rownum = mysql_num_rows($sql);

 $to= $row['email']; 
  $subject= "Your password"; 
if(!$rownum  ) {
echo "We can not find your email in our records";
}
if($rownum ==1  ){
    


$message   .= "Name:" . $row['fullname']. "\n\n";

$message   .= "Your password is:" . $row['password']. "\n\n";
      
 $header = "";     
     
 $sent =  mail($to,$subject,$message,$header);
 

if($sent)
{
print "Your password has been sent to your e mail address" ;
}


}

?>