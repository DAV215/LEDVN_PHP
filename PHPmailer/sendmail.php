<?php
    $name=$_GET['newuser_name'];
    $pass=$_GET['newuser_pass'];
    $newuser_gmail = $_GET['newuser_gmail'];
    include("setup_mail.php");


    //Recipients
    $mail->setFrom('designledvn@gmail.com', 'LEDVN IT STAFF');
    $mail->addAddress($newuser_gmail, $name);     
    //Content
    $mail->isHTML(true);    
    $mail->CharSet = 'UTF-8';                              // Set email format to HTML
    $mail->Subject = 'Đăng ký thành công LEDVN';
    $mail->Body    = file_get_contents('mail/Signin_notice.php');
    $mail->Body = str_replace('$name', $name, $mail->Body);
    $mail->Body = str_replace('$pass', $pass, $mail->Body);
    $mail->send();
    header('Location: ../pages/main/signup.php');
?>