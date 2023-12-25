<?php
    $danhmuc = $_GET['danhmuc'];
    $idsanpham = $_GET['idsanpham'];
    $sql_get_data_product = "SELECT * FROM tbl_sanpham WHERE danhmucsanpham = '".$danhmuc."' AND id_sanpham = '".$idsanpham."'"  ;
    $query_get_data_product = mysqli_query($mysqli, $sql_get_data_product);
    $product_data = mysqli_fetch_array($query_get_data_product);

?>
<div class = "tendanhmuc" style="margin-left: 20%;">
    <a href="index.php?quanly=sanpham"><p >Tất cả sản phẩm > </p></a>
    <a href="index.php?quanly=danhmucsanpham&id=<?php echo $danhmuc ?>"><p ><?php echo  ' '.$danhmuc ?></p></a>
</div>
<div class="content">
<form action="index.php?quanly=themgiohang&idsanpham=<?php echo $product_data['id_sanpham'] ?>&action=them" method="post">
    <div class="product_detail">
        <div class="product_img_detail">
            <img src="admincp/modules/quanlysanpham/uploads/<?php echo $product_data['hinhanh']  ?>" alt="">
            <input type="submit" value="Thêm giỏ hàng" class="add_tocart">
        </div>
        <div class="product_des_detaiil">
                <p class="product_item_name_detail">    <?php echo $product_data['tensp'] ?></p>
                <div class="product_item_price_detail">
                    <p>
                        <?php echo number_format($product_data['giasp']) ?>
                        <h5 style="color: crimson; font-size: small; transform: translate(5px,0px);">đ</h5>
                    </p>
                </div>
                <p class="product_item_size_detail">Kích thước: <?php echo $product_data['kichthuoc'] ?></p>
                <div class="product_item_content_detail">
                    <p style="color: #000;">Thông tin chi tiết: <br></p>
                    <?php echo $product_data['noidung'] ?>
                </div>
        </div>
    </div>
</form>

</div>