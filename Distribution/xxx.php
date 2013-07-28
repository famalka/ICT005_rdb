<form name="forgot" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
<p><label for="username">Username:</label>
<input name="username" type="text" value="" />
</p>
<input type="submit" name="submit" value="submit"/>
<input type="reset" name="reset" value="reset"/>
</form>
<?php
if(isset($_POST['submit']))
{
mysql_connect("localhost", "root", "123") or die(mysql_error());
mysql_select_db("newlogin") or die(mysql_error());

$username = $_POST['username'];
$sql="SELECT * FROM login WHERE username ='.$username.'";
$query = mysql_query($sql);

if(!$query) 
    {
    die(mysql_error());
    }
    
if(mysql_affected_rows() != 0)
    {
$row=mysql_fetch_array($query);
$password=$row["password"];
$email=$row["email"];
$subject="your password";
$header="from:dfdfama@gmail.com";
$content="your password is ".$password;
mail($email, $subject, $row, $header);
print "An email containing the password has been sent to you";
    }
else 
    {
    echo("no such login in the system. please try again.");
    }
}
?>