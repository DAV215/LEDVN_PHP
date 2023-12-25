<?php
session_start();
    if($_GET['action'] == 'dangxuat' ) {
        unset($_SESSION['dangnhap']);
        header('Location:login.php');
    }
    if(!isset($_SESSION['dangnhap']) ) {
        header('Location:login.php');
    }
?>


<link rel="stylesheet" href="admincp\assets\css\admincp.css">
<ul class="admincp_menu">

    <li><a href="admincp_index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a></li>
    <li><a href="admincp_index.php?action=quanlysanpham&query=them">Quản lý sản phẩm</a></li>
    <li><a href="admincp_index.php?action=quanlydanhmucbaiviet&query=them">Quản lý danh mục bài viết</a></li>
    <li><a href="admincp_index.php?action=quanlybaiviet&query=them">Quản lý bài viết</a></li>
    <li><a href="admincp_index.php?action=quanlygiohang&query=lietke">Quản lý giỏ hàng</a></li>
    <li><a href="admincp_index.php?action=dangxuat">Đăng xuất AD <?php echo $_SESSION['dangnhap']; ?></a></li>

</ul>