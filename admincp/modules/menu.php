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
<div class="sidebar_menu_mb">
</div>
<div class="sidebar_menu">
    <div class="main_menu">
        <img class="LOGO" src="../asset/images/Header/LEDVN_LOGO.png" alt="">
        <li>
            <a href="admincp_index.php?action=quanlydanhmucsanpham&query=them">Sản phẩm</a>
            <div class="child_menu" >
                <a href="admincp_index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a>
                <a href="admincp_index.php?action=quanlysanpham&query=them">Quản lý sản phẩm</a>
            </div>
        </li>
        <li>
            <a href="admincp_index.php?action=quanlydanhmucbaiviet&query=them">Bài viết</a>
            <div class="child_menu">
                <a href="admincp_index.php?action=quanlydanhmucbaiviet&query=them">Quản lý danh mục bài viết</a>
                <a href="admincp_index.php?action=quanlybaiviet&query=them">Quản lý bài viết</a>
            </div>
        </li>
        <li><a href="admincp_index.php?action=quanlygiohang&query=lietke">Quản lý giỏ hàng</a></li>
        <li><a href="admincp_index.php?action=quanlybanner&query=them">Quản lý Banner</a></li>
        <li><a href="admincp_index.php?action=dangxuat">Đăng xuất AD <?php echo $_SESSION['dangnhap']; ?></a></li>
    </div>

</div>
<script>
    let screen = Array();
     screen = window.screen;
    // if(screen.width< 900){
    //     let sidebar_menu  =document.querySelector('.sidebar_menu');
    //     window.addEventListener("scroll",function(){
    //         sidebar_menu.style.top = screen.height -sidebar_menu.offsetHeight  + 'px';
    //     });
    // }
</script>
