    <?php
    //Connect to database
    require('db.php');
    //Form for the listing all email and textarea for message
    echo '<form action="sendmail.php" method="GET" id="sendemail" >';
    //Setting up the variable
    $mailcount = 0;
    $namecount = 0;
	echo'<input type="text" value="email" id="email">'
	$x=$_GET['id'];
    //retriving all email from database
    $result = mysql_query("SELECT * FROM login WHERE email='$x'");
    while($row = mysql_fetch_assoc($result))
    {
    //listing all the emails as checkbox together with their names and the email
    echo '<input type="checkbox" name="mail_'.$mailcount++.'" value="'.$row['Email'].'" CHECKED>'.$row['FirstName'].' '.$row['LastName'].' ('.$row['Email'].')
    <input type="hidden" name="name_'.$namecount++.'" value="'.$row['FirstName'].'">
    <br/>';
    }
    echo '<p>
    <b> Message: </b><br/>
    <textarea name="message" id="message"></textarea></p>
    <input name="submit" type="submit" value="Send" />';
    echo '</form>'
    ?>
