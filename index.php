<?php 
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="asset/css/Mainpage/mainpage.css">
    <link rel="stylesheet" href="asset/css/Mainpage/mainpage_mobile.css?v=1">
    <link rel="stylesheet" href="asset/css/Main_css/Main.css?1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- FONT -->
    <title>LEDVN</title>
    <link rel="shortcut icon" href="asset/images/Header/LogoLEDVN_Bong_128x128.ico" type="image/x-icon" />
    <meta name="keywords" content="Neon, Bảng hiệu, Wedding, Mạch đèn">
    <meta name="description" content="Đơn vị gia công neon, bảng hiệu, mạch đèn !">
    <!-- Google tag -->
    <meta name="google-site-verification" content="Q93XKwqh8-vD2xnp8h-Yya6qbiYNrWaSXLkJk9HZB4o" />
    <!-- tag for social -->
    <meta property="og:title" content="LEDVN - Neon, bảng hiệu">
    <meta property="og:description" content="Đơn vị sản xuất bảng hiệu">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://qcledvn.store/asset/images/Header/LogoLEDVN_Bong.png">
    <meta property="og:image:secure_url" content="https://qcledvn.store/asset/images/Header/LogoLEDVN_Bong.png">
    <meta property="og:url" content="https://qcledvn.store/">
    <meta property="og:site_name" content="LEDVN">
</head>
<body>
    <div class="wrapper">
        <?php
            include("admincp/config/config.php");
            include("pages/Header.php");
            include("pages/Menu.php");
            include("pages/main/search_modal.php");
            include("pages/Main.php");
            include("pages/Footer.php");
        ?>
    </div>
</body>
<script  src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="asset/js/menu.js"></script>
</html>