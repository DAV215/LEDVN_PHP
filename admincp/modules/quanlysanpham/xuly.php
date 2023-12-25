<?php
include('../../config/config.php');
//
if($query != 'noibat' && $query != 'xoanoibat') {
    $tensanpham =$_POST['tensanpham'];
    $danhmuc =$_POST['danhmucsanpham'];
    $kichthuoc =$_POST['kichthuoc'];
    $masp =$_POST['masp'];
    $giasp =$_POST['giasp'];
    $soluong =$_POST['soluong'];
    $tomtat =$_POST['tomtat'];
    $noidung =$_POST['noidung'];
    $tinhtrang =$_POST['tinhtrang'];
    
    
    //hinhanh
    $hinhanh_stockfile = $_FILES['hinhanh']['name'];
    
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;
    //
}else{

}


if(isset($_POST['themsanpham'])){
    $sql_them = "INSERT INTO tbl_sanpham(danhmucsanpham, tensp, kichthuoc, masp, giasp, soluong, hinhanh, tomtat, noidung, tinhtrang) 
        VALUE('".$danhmuc."' ,'".$tensanpham."', '".$kichthuoc."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."')";

    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    header('Location: ../../admincp_index.php?action=quanlysanpham&query=them');
        
}elseif(isset($_POST['suasanpham'])){
    $id_sanpham = $_GET['idsanpham'];
    if($hinhanh_stockfile != ''){
        $sql_sua = "UPDATE tbl_sanpham SET

        danhmucsanpham = '".$danhmuc."', tensp = '".$tensanpham."', kichthuoc = '".$kichthuoc."', masp = '".$masp."', giasp = '".$giasp."',
        soluong = '".$soluong."', hinhanh = '".$hinhanh."', tomtat = '".$tomtat."', noidung = '".$noidung."', tinhtrang = '".$tinhtrang."'
        WHERE id_sanpham = '".$id_sanpham."' ";
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);

    }else{
        $sql_sua = "UPDATE tbl_sanpham SET
        danhmucsanpham = '".$danhmuc."', tensp = '".$tensanpham."', kichthuoc = '".$kichthuoc."', masp = '".$masp."', giasp = '".$giasp."',
        soluong = '".$soluong."', tomtat = '".$tomtat."', noidung = '".$noidung."', tinhtrang = '".$tinhtrang."'
        WHERE id_sanpham = '".$id_sanpham."' ";
    }
    mysqli_query($mysqli, $sql_sua);
    header('Location: ../../admincp_index.php?action=quanlysanpham&query=them');
    }elseif($_GET['query'] == 'noibat'){
        $id_sanpham = $_GET['idsanpham'];
        $sql_sua = "UPDATE tbl_sanpham SET noibat = 1 WHERE id_sanpham = '".$id_sanpham."'";
        mysqli_query($mysqli, $sql_sua);
        header('Location: admincp_index.php?action=quanlysanpham&query=them');
    }
    elseif($_GET['query'] == 'xoanoibat'){
        $id_sanpham = $_GET['idsanpham'];
        $sql_sua = "UPDATE tbl_sanpham SET noibat = 0 WHERE id_sanpham = '".$id_sanpham."'";
        mysqli_query($mysqli, $sql_sua);
        header('Location: admincp_index.php?action=quanlysanpham&query=them');
    }
    else{
        $id = $_GET['idsanpham'];
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham = '". $id ."' ";
        mysqli_query($mysqli, $sql_xoa);
        header('Location: ../../admincp_index.php?action=quanlysanpham&query=them');
    }

?>
