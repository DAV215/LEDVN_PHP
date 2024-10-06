
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
<!-- code trong trang chủ cũ -->
<div class="content">
    <h1 class="name_of_hangmuc" style="margin-left:5%;">Bài viết nổi bật</h1>
    <div class="list_product_noibat">
        <?php
        $sql_cmd = "SELECT * FROM tbl_baiviet ORDER BY id_baiviet DESC";
        $sql_query = mysqli_query($mysqli, $sql_cmd);
        $item_stt = 0;
        $item_stt = 0;
        while ($row = mysqli_fetch_array($sql_query)) {
            $item_stt++;
            ?>
            <div class="item_noibat" id="item_baiviet_noibat">
                <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row['hinhanh']; ?>" alt="" loading="lazy">
                <div class="item_noibat_des">
                    <h1 class="item_noibat_name"><?php echo $row['tenbaiviet']; ?></h1>
                    <h3 class="item_noibat_tomtat"><?php echo $row['tomtat']; ?></h3>
                    <a
                        href="index.php?quanly=chitietbaiviet&danhmuc=<?php echo $row['danhmucbaiviet'] ?>&idbaiviet=<?php echo $row['id_baiviet'] ?>"><button>Đọc
                            Thêm</button></a>

                </div>
            </div>
        <?php } ?>

        <div class="noibat_pagination">
            <?php
            for ($i = 0; $i < $item_stt; $i++) {
                ?>
                <button id="baiviet_pagination_btn"><?php echo $i ?></button>
            <?php } ?>
        </div>
    </div>

</div>