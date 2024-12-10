
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
        if($tam == 'quanlyphongban' && $query == 'them'){
            include('modules/MRP/department/lietke.php');
        }
        else if($tam == 'quanlynhanvien' && $query == 'lietke'){
            include('modules/MRP/employee/lietke.php');
        }
        else if($tam == 'quanlynhanvien' && $query == 'them'){
            include('modules/MRP/employee/them.php');
        }
        else if($tam == 'quanlyphanquyen' && $query == 'lietke'){
            include('modules/MRP/permission/lietke.php');
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
        }else if($tam == 'quanlybanner' && $query == 'them'){
            include('modules/quanlybanner/them.php');
            include('modules/quanlybanner/lietke.php');
        }
        else if($tam == 'quanlybanner' && $query == 'sua'){
            include('modules/quanlybanner/sua.php');
        }
        else{
            // include('modules\dashboard.php');
        }
    ?>
</div>