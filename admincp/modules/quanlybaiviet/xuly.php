<?php
include('../../config/config.php');
//
$tenbaiviet =$_POST['tenbaiviet'];
$danhmuc =$_POST['danhmucbaiviet'];
$tomtat =$_POST['tomtat'];
$noidung =$_POST['noidung'];

//
$hinhanh_stockfile = $_FILES['hinhanh']['name'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
if(isset($_POST['thembaiviet'])){
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $current_time = date("Y-m-d H:i:s");
    $sql_them = "INSERT INTO tbl_baiviet(danhmucbaiviet, tenbaiviet, hinhanh, tomtat, noidung, ngayviet) 
        VALUE('".$danhmuc."' ,'".$tenbaiviet."', '".$hinhanh."','".$tomtat."','".$noidung."','".$current_time."')";

    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    header('Location: ../../admincp_index.php?action=quanlybaiviet&query=them');
        
}elseif(isset($_POST['suabaiviet'])){
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $current_time = date("Y-m-d H:i:s");
    $id_baiviet = $_GET['idbaiviet'];
    if($hinhanh_stockfile == null){
        $sql_sua = "UPDATE tbl_baiviet SET
        danhmucbaiviet = '".$danhmuc."', tenbaiviet = '".$tenbaiviet."', tomtat = '".$tomtat."', noidung = '".$noidung."', ngayviet = '".$current_time."'
        WHERE id_baiviet = '".$id_baiviet."' ";
    }
    else{
        $sql_sua = "UPDATE tbl_baiviet SET
        danhmucbaiviet = '".$danhmuc."', tenbaiviet = '".$tenbaiviet."', hinhanh  = '".$hinhanh."',  tomtat = '".$tomtat."', noidung = '".$noidung."', ngayviet = '".$current_time."'
        WHERE id_baiviet = '".$id_baiviet."' ";
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    }
    mysqli_query($mysqli, $sql_sua);
    header('Location: ../../admincp_index.php?action=quanlybaiviet&query=them');
}else{
    $id = $_GET['idbaiviet'];
    $sql_xoa = "DELETE FROM tbl_baiviet WHERE id_baiviet = '". $id ."' ";
    mysqli_query($mysqli, $sql_xoa);
    header('Location: ../../admincp_index.php?action=quanlybaiviet&query=them');
}

?>
