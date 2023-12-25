<?php
    $newuser_gmail = $_GET['newuser_gmail'];
    include('../setup_mail.php');
    ob_start();
    include('../../admincp/modules/quanlygiohang/sua_xoa.php');
    $html = ob_get_clean();

    // Inline CSS styles

    //Recipients
    $mail->setFrom('designledvn@gmail.com', 'LEDVN IT STAFF');
    $mail->addAddress($newuser_gmail, $name);     
    //Content
    $mail->isHTML(true);    
    $mail->CharSet = 'UTF-8';                              // Set email format to HTML
    $mail->Subject = 'Đăng ký thành công LEDVN';
    $mail->Body    = $html;
    $mail->send();
    header('Location:../../admincp/admincp_index.php?action=quanlygiohang&query=lietke');
?>