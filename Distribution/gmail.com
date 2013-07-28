<?php
    require("phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    // ---------- adjust these lines ---------------------------------------
    $mail->Username = "dfdfama@gmail.com"; // your GMail user name
    $mail->Password = "justasmile"; 
    $mail->AddAddress("roshanpiyadigama@gmail.com"); // recipients email
    $mail->FromName = "Famalka"; // readable name

    $mail->Subject = "i hate this code";
    $mail->Body    = "aaaaaaaaaabbbbbbbbbbbbccccccccccccc"; 
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