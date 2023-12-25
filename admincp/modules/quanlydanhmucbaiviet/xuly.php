<?php
include('../../config/config.php');
    $tendanhmuc_baiviet =$_POST['tendanhmuc'];
    $thutu =$_POST['thutu'];
    if(isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO tbl_danhmucbaiviet(tendanhmuc_baiviet, thutu) VALUE('".$tendanhmuc_baiviet."','".$thutu."')";
        mysqli_query($mysqli, $sql_them);
        header('Location: ../../admincp_index.php?action=quanlydanhmucbaiviet&query=them');
    }elseif(isset($_POST['suadanhmuc'])){
        $sql_sua = "UPDATE tbl_danhmucbaiviet SET tendanhmuc_baiviet = '".$tendanhmuc_baiviet."', thutu = '".$thutu."' WHERE id_danhmucbaiviet = '$_GET[iddanhmuc]'";
        mysqli_query($mysqli, $sql_sua);
        header('Location: ../../admincp_index.php?action=quanlydanhmucbaiviet&query=them');
    }else{
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM tbl_danhmucbaiviet WHERE id_danhmucbaiviet = '". $id ."' ";
        mysqli_query($mysqli, $sql_xoa);
        header('Location: ../../admincp_index.php?action=quanlydanhmucbaiviet');
    }

?>