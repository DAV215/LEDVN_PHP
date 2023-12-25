<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/admincp.css?v=1">
    <link rel="stylesheet" href="../asset/css/Main_css/Main.css?v=1">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- FONT -->

    <title>ADMINCP</title>
</head>
<body>
    <?php
            include("config/config.php");
            include("modules/menu.php");
            include("modules/main.php");
            include("modules/footer.php");
            include("modules/quanlysanpham/clear_img.php");
            include("modules/quanlybaiviet/clear_img.php");
    ?> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'tomtat' );
        CKEDITOR.replace( 'noidung' );
    </script>
</body>

</html>