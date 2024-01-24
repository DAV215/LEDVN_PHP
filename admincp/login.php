<?php
    session_start();
    include("config/config.php");
    if(isset($_POST['btn_login'])){
        $user_login = $_POST['user_login'];
        $pass_login = md5($_POST['pass_login']);
        $sql_cmd= "SELECT * FROM tbl_admin WHERE username = '".$user_login."' AND password = '".$pass_login."'";
        $query = mysqli_query($mysqli, $sql_cmd);
        if(mysqli_num_rows($query)> 0){
            $_SESSION['dangnhap'] = $user_login;
            header('Location:admincp_index.php?action=quanlysanpham&query=them');
        } else{
            echo '<script>alert("Cút");</script>';
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="icon" href="../asset\images\Header\LEDVN_LOGO.png" type="image/png" />
    <title>ADMIN LOGIN</title>
</head>
<body>
    <div class="wraper">
        <div class="content">
        <form action="" method="post" autocomplete="none">
            <div class="box_login">
                    <p class="box_name">ADMIN LOGIN</p>
                    <input type="text" placeholder="User"  name="user_login">
                    <input type="password" placeholder="PassWord"  name="pass_login">
                    <button type="submit" name="btn_login">Đăng Nhập</button>
            </div>
        </form>
            
        </div>   
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>