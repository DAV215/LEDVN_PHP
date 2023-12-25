<?php 
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/Mainpage/mainpage.css">
    <link rel="stylesheet" href="asset/css/Mainpage/mainpage_mobile.css?v=1">
    <link rel="stylesheet" href="asset/css/Main_css/Main.css?1">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- FONT -->
    <title>LEDVN</title>
</head>
<body>
    <div class="wrapper">
        <?php
            include("admincp\config\config.php");
            include("pages\Header.php");
            include("pages\Menu.php");
            include("pages\Main.php");
            include("pages\Footer.php");
        ?>
    </div>
</body>
<script  src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</html>