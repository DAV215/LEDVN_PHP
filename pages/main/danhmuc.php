<?php 
    $danhmuc = $_GET['id'];
?>
<div class = "tendanhmuc" style="margin-left: 20%;">
    
    <a href="index.php?quanly=sanpham"><p style="font-weight: 500;">Sản phẩm > </p></p></a>

    <a href="index.php?quanly=danhmucsanpham&id=<?php echo $danhmuc ?>"><p ><?php echo  ' '.$danhmuc ?></p></a>
</div>
<?php
    $sql_get_alldata = "SELECT * FROM tbl_sanpham WHERE danhmucsanpham = '".$danhmuc."' ";
    $all_data = mysqli_query($mysqli, $sql_get_alldata);
    $number_of_product = mysqli_num_rows($all_data);

    if(isset($_POST['page'])){
        $page = $_POST['page'];
        $pro_start = $page * 6;
        $pro_end = $page * 5 + 6;
        $sql_get_data = "SELECT * FROM tbl_sanpham WHERE danhmucsanpham = '".$danhmuc."' LIMIT $pro_start, $pro_end";
    }
    else{
        $sql_get_data = "SELECT * FROM tbl_sanpham WHERE danhmucsanpham = '".$danhmuc."' LIMIT 0, 6";
    }
    $product_data = mysqli_query($mysqli, $sql_get_data);
?>

<div class="content">
    <ul class="product_list">
        <?php
        while ($product_data_arr = mysqli_fetch_array($product_data)) {
            $idsanpham = $product_data_arr['id_sanpham'];
        ?>
        <li class="product_item">
            <a href="index.php?quanly=chitietsp&danhmuc=<?php echo $danhmuc?>&idsanpham=<?php echo $idsanpham?>">
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
    <div class="Pagination">
        <form action="" method="POST">
            <?php
                $number_pages = ceil($number_of_product / 6);
                for ($i =0; $i < $number_pages; $i++) {
                    echo '<button type="submit" name = "page" value = "'.$i.'">'.$i.'</button>';
                }
            ?>
        </form>

    </div>

    
</div>

<?php

?>