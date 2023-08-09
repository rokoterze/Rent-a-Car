<?php

$body = "
Hi ".$name. ' ' .$surname."!<br><br>
Your verification code is <strong>".$verificationCode."</strong>!<br>
Enter this code on our Account Activation site to activate Your account. If You have any questions, please send us an email.<br><br>
Thank You!
";


use PHPMailer\PHPMailer\PHPMailer;

    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';
    
    $mail = new PHPMailer(true);
    
    
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "projekt.aspira.rokoterze@gmail.com";
    $mail->Password ="igykjpuzshdqpsak";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;
    
    $mail->setFrom("projekt.aspira.rokoterze@gmail.com");
    
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = "Email Verification Code";
    $mail->Body = $body;
    
    if ($mail->send()) {
        $response = "Email is sent!";
    }
    else{
        $response = "Something is wrong" . $mail->ErrorInfo;
    }   
 