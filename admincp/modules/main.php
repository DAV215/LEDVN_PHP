
<div class="admin_content">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }
        else{
            $tam = '';
            $query = '';
        }
        if($tam == 'quanlydanhmucsanpham' && $query == 'them'){
            include('modules/quanlydanhmucsp/them.php');
            include('modules/quanlydanhmucsp/lietke.php');
        }
        else if($tam == 'quanlydanhmucsanpham' && $query == 'sua'){
            include('modules/quanlydanhmucsp/sua.php');
        }
        else if($tam == 'quanlysanpham' && $query == 'them'){
            include('modules/quanlysanpham/them.php');
            include('modules/quanlysanpham/lietke.php');
        }
        else if($tam == 'quanlysanpham' && $query == 'sua'){
            include('modules/quanlysanpham/sua.php');
        }
        else if($tam == 'quanlysanpham' && $query == 'filter'){
            include('modules/quanlysanpham/lietke.php');
        }
        else if($tam == 'quanlysanpham' && $query == 'noibat' || $query == 'xoanoibat'){
            include('modules/quanlysanpham/xuly.php');
        }
        else if($tam == 'quanlygiohang' && $query == 'lietke'){
            include('modules/quanlygiohang/lietke.php');
        }
        else if($tam == 'quanlygiohang' && $query != 'lietke'){
            include('modules/quanlygiohang/sua_xoa.php');
        }
        else if($tam == 'quanlydanhmucbaiviet' && $query == 'them'){
            include('modules/quanlydanhmucbaiviet/them.php');
            include('modules/quanlydanhmucbaiviet/lietke.php');
        }
        else if($tam == 'quanlydanhmucbaiviet' && $query == 'sua'){
            include('modules/quanlydanhmucbaiviet/sua.php');
        }
        else if($tam == 'quanlybaiviet' && $query == 'them'){
            include('modules/quanlybaiviet/them.php');
            include('modules/quanlybaiviet/lietke.php');
        }
        else if($tam == 'quanlybaiviet' && $query == 'sua'){
            include('modules/quanlybaiviet/sua.php');
        }
        else{
            include('modules\dashboard.php');
        }
    ?>
</div>