<?php

    include("../../admincp/config/config.php");
    session_start();
    if(isset($_POST["newuser_signup"]) ){
      $newuser_name = $_POST['newuser_name'];
      $newuser_pass = md5($_POST['newuser_pass']);
      $newuser_gmail = $_POST['newuser_gmail'];
      $newuser_sdt = $_POST['newuser_sdt'];
      $sql_check_id = "SELECT * FROM tbl_userlogin WHERE user_name = '".$newuser_name."'";
      $result = mysqli_query($mysqli,$sql_check_id);
      if(mysqli_num_rows($result) == 0){
        $sql_query = "INSERT INTO tbl_userlogin(user_name, user_password, user_gmail, user_sdt, user_diachi) 
        VALUES ('".$newuser_name."','".$newuser_pass."','".$newuser_gmail."','".$newuser_sdt."','')";
        mysqli_query($mysqli, $sql_query);
        header('Location:../../PHPmailer/sendmail.php?newuser_name=' . $newuser_name . '&newuser_pass=' . $_POST['newuser_pass'] .'&newuser_gmail=' .$newuser_gmail);
      } else{
        echo "<script>alert('Tài khoản đã tồn tại, sử dụng Username khác');</script>";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">	
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../../asset/css/Login_css/Signin.css?v=1">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FONT -->
    <title>LEDVN-Đăng ký</title>
</head>
<body>
<div class="wrapper">
        <div class="content">
            <form action="" method="POST">
                <div class="signin box">
                    <p class="form_name" onclick="click_changeform()" style="--i : 1;">Đăng ký</p>
                    <div class="row">
                        <input type="text" name="newuser_name" placeholder="Tên tài khoản vd pinkpink123">
                        <div class="border_2"></div>
                    </div>
                    <div class="row">
                        <input type="text" name="newuser_pass" placeholder="Mật khẩu">
                        <div class="border_2"></div>
                    </div>
                    <div class="row">
                        <input type="email" name="newuser_gmail" placeholder="Gmail">
                        <div class="border_2"></div>
                    </div>
                    <div class="row">
                        <input type="text" name="newuser_sdt" placeholder="SDT ZALO">
                        <div class="border_2"></div>
                    </div>
                    <div class="row">
                        <button type="submit" name="newuser_signup">Đăng ký</button>
                    </div>          
                </div>
            </form>
            <div class="direct">
                <a href="signup.php">Đăng nhập</a>
                <a href="#">Quên mật khẩu ?</a>
            </div>
        </div>
    </div>
</body>
</html>