<?php
    include("../../admincp/config/config.php");
    session_start();
    if(isset($_POST["signup"])){
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../../asset/css/Login_css/Signin.css?v=1">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- FONT -->
    <title>LEDVN-Đăng nhập</title>
</head>
<body>
<div class="wrapper">
        <div class="content">
            <form action="" method="POST">
                <div class="signup box">
                    <p class="form_name"style="--i : 1;">Đăng Nhập</p>
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
                </div>
            </form>
            <div class="direct">
                <a href="signin.php">Đăng ký</a>
                <a href="#">Quên mật khẩu ?</a>
            </div>
        </div>
    </div>
</body>
</html>