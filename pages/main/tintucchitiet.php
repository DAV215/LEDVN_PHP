<?php
    $danhmuc = $_GET['danhmuc'];
    $idbaiviet = $_GET['idbaiviet'];
    $sql_get_data_baiviet = "SELECT * FROM tbl_baiviet WHERE danhmucbaiviet = '".$danhmuc."' AND id_baiviet = '".$idbaiviet."'"  ;
    $query_get_data_baiviet = mysqli_query($mysqli, $sql_get_data_baiviet);
    $baiviet_data = mysqli_fetch_array($query_get_data_baiviet);

?>
<div class = "tendanhmuc" style="margin-left: 20%;">
    <a href="index.php?quanly=tintuc"><p >Tất cả bài viết > </a>

    <a href="index.php?quanly=danhmucbaiviet&id=<?php echo $danhmuc ?>"><p ><?php echo  ' '.$danhmuc ?></p></a>
</div>
<div class="content">
    <div class="baivietchitiet">
        <?php echo $baiviet_data['noidung'] ?>
    </div>


</div>