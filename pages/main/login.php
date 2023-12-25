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
    }elseif(isset($_POST["signup"])){
        $signin_name = $_POST['signin_name'];
        $signin_pass = md5($_POST['signin_pass']);
        $sql_query  = "SELECT * FROM  tbl_userlogin WHERE user_name = '".$signin_name."' AND user_password = '".$signin_pass."'";
        $sql_cmd = mysqli_query($mysqli, $sql_query);
        $result = mysqli_fetch_array($sql_cmd);
        if(mysqli_num_rows($sql_cmd) > 0){
            echo '<script>alert("Đăng nhập thành công");</script>';
            $_SESSION['user_login'] = $signin_name;
            $_SESSION['id_user'] = $result['id_user'];
            header('Location:../../index.php?quanly=sanpham');
        } else{echo '<script>alert("Không đúng");</script>';}
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../asset/css/Login_css/Login.css?v=1">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FONT -->
    <title>LEDVN-Login</title>
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
                    <p>Đăng ký nhanh qua <i class="fa fa-google" aria-hidden="true" style="padding-left:10px;"></i></p>             
                </div>
            </form>
            <form action="" style="--i: 2;" method="POST" autocomplete="none">
                <div class="signup box" for="chk" aria-hidden="true">
                    <span class="form_name"  onclick="">Đăng nhập</span>
                    <div class="row">
                        <input type="text" name="signin_name" placeholder="Tên tài khoản">
                        <div class="border_2"></div>
                    </div>
                    <div class="row">
                        <input type="text" name="signin_pass" placeholder="Mật khẩu">
                        <div class="border_2"></div>
                    </div>
                    <div class="row">
                        <button type="submit" name="signup">Đăng nhập</button>
                    </div>
                    <p>Đăng nhập nhanh qua <i class="fa fa-google" aria-hidden="true" style="padding-left:10px;"></i></p>
                    
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function click_changeform(){
        alert("ooooo");
    }
</script>
</html>
