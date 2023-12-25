
<?php
    $sql_cmd = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_danhmucbaiviet DESC";
    $sql_query_danhmuc = mysqli_query($mysqli, $sql_cmd);
?>

<div class="content">
    <?php
    while ($row_danhmuc = mysqli_fetch_array($sql_query_danhmuc)){
    ?>
        <div class = "tendanhmuc">
            <p style="font-weight: 900;"><?php echo $row_danhmuc['tendanhmuc_baiviet'] ?> </p>
        </div>
        <ul class="product_list">
            <?php
            $sql_get_data_baiviet = "SELECT * FROM tbl_baiviet
                                     WHERE danhmucbaiviet = '".$row_danhmuc['tendanhmuc_baiviet']."'
                                     ORDER BY id_baiviet DESC LIMIT 0,3";
            $data_baiviet = mysqli_query($mysqli, $sql_get_data_baiviet);
            $number_of_product = mysqli_num_rows($data_baiviet);
            while ($baiviet_arr = mysqli_fetch_array($data_baiviet)) {
                $idbaiviet = $baiviet_arr['id_baiviet'];
            ?>
            <li class="baiviet_item">
                <a href="index.php?quanly=chitietbaiviet&danhmuc=<?php echo $row_danhmuc['tendanhmuc_baiviet']?>&idbaiviet=<?php echo $idbaiviet?>">
                    <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $baiviet_arr['hinhanh']  ?>" alt="">
                    <div class="baiviet_des">
                        <div class="baiviet_tomtat">
                            <?php echo $baiviet_arr['tomtat'] ?></p>
                        </div>
                        <div class="btn_detail">
                            <button>Chi tiết</button>
                        </div>
                    </div>
                    
                </a>
            </li>
            <?php
            }
            ?>
        </ul>
        <button class="more_products"><a href="index.php?quanly=danhmucbaiviet&id=<?php echo $row_danhmuc['tendanhmuc_baiviet'] ?>">Xem thêm</a></button>

    <?php
    }
    ?>

</div>