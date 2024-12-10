<link rel="stylesheet" href="asset/css/Mainpage/noibat.css">
<?php
$sql_cmd = "SELECT * FROM tbl_sanpham WHERE noibat = 1 ORDER BY id_sanpham DESC";
$sql_query = mysqli_query($mysqli, $sql_cmd);
?>
<?php
require("pages/call_data/ads_data.php");
?>
<!-- <div class="content">
    <h1 class="name_of_hangmuc" style = "margin:5%;">Thiết kế neon </h1>
    <?php
    //  include('Tryneon/designdemo.php'); 
     ?>
</div> -->
<div class="content">
    <h1 class="name_of_hangmuc" style="margin:5%;">Sản phẩm nổi bật</h1>
    <div class="list_product_noibat">
        <?php
        $item_stt = 0;
        while ($row = mysqli_fetch_array($sql_query)) {
            $item_stt++;
            ?>
        <div class="item_noibat" id="item_product_noibat">
            <img src="admincp/modules/quanlysanpham/uploads/<?php echo $row['hinhanh']; ?>" loading="lazy" alt="">
            <div class="item_noibat_des">
                <h1 class="item_noibat_name"><?php echo $row['tensp']; ?></h1>
                <h2 class="item_noibat_gia"><?php echo number_format($row['giasp']); ?></h2>
                <h3 class="item_noibat_tomtat"><?php echo $row['tomtat']; ?></h3>
                <a
                    href="index.php?quanly=chitietsp&danhmuc=<?php echo $row['danhmucsanpham'] ?>&idsanpham=<?php echo $row['id_sanpham'] ?>"><button>Đọc
                        Thêm</button></a>

            </div>
        </div>
        <?php } ?>

        <div class="noibat_pagination">
            <?php
            for ($i = 0; $i < $item_stt; $i++) {
                ?>
            <button id="product_pagination_btn"><?php echo $i ?></button>
            <?php } ?>
        </div>
    </div>
</div>
<?php include('pages/main/sanpham22T9.php'); ?>
<div class="content">
<h1 class="name_of_hangmuc" style="margin-left:5%;">Bài viết nổi bật</h1>

</div>
<?php include('pages/main/tintuc22T9.php'); ?>

<div class="content">
    <h1 class="name_of_hangmuc">Đối tác</h1>
    <div class="partner">
        <img src="asset/images/Partner/FF.jpg" alt="" loading="lazy">
        <img src="asset/images/Partner/TA.jpg" alt="" loading="lazy">
        <img src="asset/images/Partner/LX.jpg" alt="" loading="lazy">
        <img src="https://kprint.vn/wp-content/uploads/2020/09/logo.png" alt="" loading="lazy">
        <img src="https://trinitygroup.vn/wp-content/uploads/2024/04/trinity.png" alt="" loading="lazy">
    </div>
</div>
<script src="asset/js/product_noibat.js"></script>
<script src="asset/js/animation_for_Indexpage.js"></script>