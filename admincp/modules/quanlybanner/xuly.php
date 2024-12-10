<?php
include('../../config/config.php');
//
$title =$_POST['title'];
$content =$_POST['content'];

//
$link_img_stockfile = $_FILES['link_img']['name'];
$link_img = $_FILES['link_img']['name'];
$link_img_tmp = $_FILES['link_img']['tmp_name'];
$link_img = time().'_'.$link_img;
if(isset($_POST['thembanner'])){
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $current_time = date("Y-m-d H:i:s");
    $sql_them = "INSERT INTO `tbl_banner`(`title`, `content`, `link_img`, `time`) 
        VALUE('".$title."' ,'".$content."', '".$link_img."','".$current_time."')";

    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($link_img_tmp,'uploads/'.$link_img);
    header('Location: ../../admincp_index.php?action=quanlybanner&query=them');
        
}elseif(isset($_POST['suabanner'])){
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $current_time = date("Y-m-d H:i:s");
    $id = $_GET['id'];
    if($link_img_stockfile == null){
        $sql_sua = "UPDATE tbl_banner SET title = '".$title."', content = '".$content."'
        WHERE id = '".$id."' ";
    }
    else{
        $sql_sua = "UPDATE tbl_banner SET
       title = '".$title."', link_img  = '".$link_img."',  content = '".$content."'
        WHERE id = '".$id."' ";
        move_uploaded_file($link_img_tmp,'uploads/'.$link_img);
    }
    mysqli_query($mysqli, $sql_sua);
    header('Location: ../../admincp_index.php?action=quanlybanner&query=them');
}else{
    $id = $_GET['id'];
    $sql_xoa = "DELETE FROM tbl_banner WHERE id = '". $id ."' ";
    mysqli_query($mysqli, $sql_xoa);
    header('Location: ../../admincp_index.php?action=quanlybanner&query=them');
}

?>
