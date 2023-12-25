
<?php 
    $sql_get_data_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC ";
    $data_danhmuc = mysqli_query($mysqli, $sql_get_data_danhmuc);


    // while ($row_sanpham = mysqli_fetch_array($data_sanpham)) {}
?>

<div class="content">
    <?php
    while ($row_danhmuc = mysqli_fetch_array($data_danhmuc)){
    ?>
        <div class = "tendanhmuc">
            <p style="font-weight: 900;"><?php echo $row_danhmuc['tendanhmuc'] ?> </p>
        </div>
        <ul class="product_list">
            <?php
            $sql_get_data_sanpham = "SELECT * FROM tbl_sanpham
                                     WHERE danhmucsanpham = '".$row_danhmuc['tendanhmuc']."'
                                     ORDER BY id_sanpham ASC LIMIT 0,3";
            $data_sanpham = mysqli_query($mysqli, $sql_get_data_sanpham);
            $number_of_product = mysqli_num_rows($data_sanpham);
            while ($product_data_arr = mysqli_fetch_array($data_sanpham)) {
                $idsanpham = $product_data_arr['id_sanpham'];
            ?>
            <li class="product_item">
                <a href="index.php?quanly=chitietsp&danhmuc=<?php echo $row_danhmuc['tendanhmuc']?>&idsanpham=<?php echo $idsanpham?>">
                    <img src="admincp/modules/quanlysanpham/uploads/<?php echo $product_data_arr['hinhanh']  ?>" alt="">
                    <div class="product_des">
                        <p class="product_item_name">    <?php echo $product_data_arr['tensp'] ?></p>
                        <p class="product_item_size">KT: <?php echo $product_data_arr['kichthuoc'] ?></p>
                        <div class="product_item_price">
                            <p>
                                <?php echo number_format($product_data_arr['giasp']) ?>
                                <h5 style="color: crimson; font-size: small; transform: translate(5px,-20px);">đ</h5>
                            </p>
                        </div>
                    </div>
                    <div class="btn_detail">
                        <button>Chi tiết</button>
                    </div>
                </a>
            </li>
            <?php
            }
            ?>
        </ul>
        <button class="more_products"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['tendanhmuc'] ?>">Xem thêm</a></button>

    <?php
    }
    ?>

</div>
