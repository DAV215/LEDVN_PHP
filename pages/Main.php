<link rel="stylesheet" href="asset/css/Main_css/Main.css?1">
<div class="main">
    <div class="maincontent">
        <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            }
            else{
                $tam = '';
            }
            if($tam == 'trangchu'){
                include('pages/main/trangchu.php');
            }
            elseif($tam == 'danhmucsanpham'){
                include('pages/main/danhmuc.php');
            }
            elseif($tam == 'chitietsp'){
                include('pages/main/sanpham.php');
            }
            elseif($tam == 'giohang'){
                include('pages/main/giohang.php');
            }
            elseif($tam == 'lienhe'){
                include('pages/main/lienhe.php');
            }
            elseif($tam == 'tintuc'){
                include('pages/main/tintuc.php');
            }
            elseif($tam == 'danhmucbaiviet'){
                include('pages/main/danhmucbaiviet.php');
            }
            elseif($tam == 'chitietbaiviet'){
                include('pages/main/tintucchitiet.php');
            }
            elseif($tam == 'sanpham'){
                include('pages/main/index.php');
            }
            elseif($tam == 'themgiohang'){
                include('pages/main/themgiohang.php');
            }
            elseif($tam == 'giohang'){
                include('pages/main/giohang.php');
            }
            elseif($tam == 'dangnhap'){
                echo "<script>window.location.href='pages/main/signup.php'</script>";

            }
            elseif($tam == 'dangxuat'){
                echo "<script>window.location.href='index.php?quanly=sanpham'</script>";
                unset($_SESSION['user_login']);
            }
            elseif($tam == 'timkiem'){
                $search_content = $_POST['search_content'];
                include('pages/main/search.php');
            }
            elseif($tam == 'camon'){
                include('pages/main/camon.php');
            }
            else{
                include('pages/main/trangchu.php');
            }
        ?>
    </div>
    <?php
        include("pages/sidebar/sidebar.php") ;
    ?>
</div>