<div class = "tendanhmuc" style="margin-left: 20%;">
    <p style="font-weight: 900; font-size: x-large;">Tìm kiếm </p>
</div>
<?php 
    $sql_query = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC";
    $sql_data_sp = mysqli_query($mysqli, $sql_query);

    $sql_get_data_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC ";
    $data_danhmuc = mysqli_query($mysqli, $sql_get_data_danhmuc);
    
?>

<div class="content">
    <?php
    $key = $_POST['search_content'];
    $i = 0;
    $data_match_arr = array();
    $data_danhmuc_match_arr = array();
        while($row = mysqli_fetch_array($sql_data_sp)){
            if(strpos($row['tensp'],$key)){
                $i++;
                $data_match_arr[] = $row['id_sanpham'];
                if(!in_array($row['danhmucsanpham'], $data_danhmuc_match_arr)) $data_danhmuc_match_arr[] = $row['danhmucsanpham'];
            }

        }
    ?>
    <?php
    foreach( $data_danhmuc_match_arr as $danhmuc){
    ?>
        <div class = "tendanhmuc">
            <p style="font-weight: 900;"><?php echo $danhmuc ?> </p>
        </div>
        <ul class="product_list" style="flex-wrap:wrap !important;">
            <?php
                $sql_get_data_sanpham = "SELECT * FROM tbl_sanpham WHERE danhmucsanpham = '".$danhmuc."' ORDER BY id_sanpham DESC;";
                $data_sanpham = mysqli_query($mysqli, $sql_get_data_sanpham);

                while ($product_data_arr = mysqli_fetch_array($data_sanpham)) {
                    if (in_array($product_data_arr['id_sanpham'], $data_match_arr)) {
                        echo '<li class="product_item">
                            <a href="index.php?quanly=chitietsp&danhmuc=' . $danhmuc . '&idsanpham=' . $product_data_arr['id_sanpham'] . '">
                                <img src="admincp/modules/quanlysanpham/uploads/' . $product_data_arr['hinhanh'] . '" alt="">
                                <div class="product_des">
                                    <p class="product_item_name">' . $product_data_arr['tensp'] . '</p>
                                    <p class="product_item_size">KT: ' . $product_data_arr['kichthuoc'] . '</p>
                                    <div class="product_item_price">
                                        <p>' . number_format($product_data_arr['giasp']) . '
                                            <h5 style="color: crimson; font-size: small; transform: translate(5px,-20px);">đ</h5>
                                        </p>
                                    </div>
                                </div>
                                <div class="btn_detail">
                                    <button>Chi tiết</button>
                                </div>
                            </a>
                        </li>';
                    }
                }
            ?>

        </ul>
    <?php
    }
    ?>

</div>

