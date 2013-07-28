<?php

	mysql_connect("localhost", "root", "123") or die(mysql_error());
	mysql_select_db("newlogin") or die(mysql_error());
    require("phpmailer/class.phpmailer.php");
	
	
    $mail = new PHPMailer();
	
	$email = $_REQUEST['email'] ;
	$username= $_REQUEST['username'] ;
	$link=
	
	$qry=mysql_query("select * from login where email='$email'");
	$row = mysql_fetch_array($qry); 
	$email1=$row["email"];
	$password=$row["password"];
	//$email1="roshanpiyadigama@gmail.com";

    // ---------- adjust these lines ---------------------------------------
    $mail->Username = "rdbsixnet@gmail.com"; // your GMail user name
    $mail->Password = "rdbsixnet123"; 
    $mail->AddAddress($email1); // recipients email
    $mail->FromName = "RDB"; // readable name

    $mail->Subject = "Welcome";
    $mail->Body    = "Your password is $password <a href='http://localhost/Newlogin/forgot.php'>click</a>"; 
    //-----------------------------------------------------------------------

    $mail->Host = "ssl://smtp.gmail.com"; // GMail
    $mail->Port = 465;
    $mail->IsSMTP(); // use SMTP
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->From = $mail->Username;
    if(!$mail->Send())
        echo "Mailer Error: " . $mail->ErrorInfo;
    else
        echo "Message has been sent";
    ?>