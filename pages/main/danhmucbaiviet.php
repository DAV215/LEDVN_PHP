<?php 
    // $id_danhmuc = $_GET['id'];
    // $sql_cmd = "SELECT * FROM tbl_baiviet WHERE danhmucbaiviet = '".$id_danhmuc."'";
    // $sql_query = mysqli_query($mysqli, $sql_cmd);
    // while( $row = mysqli_fetch_array($sql_query) ){
    //     echo $row['tenbaiviet'];
    // }
    $danhmuc = $_GET['id'];

?>

<div class = "tendanhmuc" style="margin-left: 20%;">
    
    <a href="index.php?quanly=tintuc"><p style="font-weight: 500;">Bài viết > </p></p></a>

    <a href="index.php?quanly=danhmucbaiviet&id=<?php echo $danhmuc ?>"><p ><?php echo  ' '.$danhmuc ?></p></a>
</div>
<?php
    $sql_get_alldata = "SELECT * FROM tbl_baiviet WHERE danhmucbaiviet = '".$danhmuc."' ";
    $all_data = mysqli_query($mysqli, $sql_get_alldata);
    $number_of_product = mysqli_num_rows($all_data);

    if(isset($_POST['page'])){
        $page = $_POST['page'];
        $pro_start = $page * 6;
        $pro_end = $page * 5 + 6;
        $sql_get_data = "SELECT * FROM tbl_baiviet WHERE danhmucbaiviet = '".$danhmuc."' LIMIT $pro_start, $pro_end";
    }
    else{
        $sql_get_data = "SELECT * FROM tbl_baiviet WHERE danhmucbaiviet = '".$danhmuc."' LIMIT 0, 6";
    }
    $baiviet = mysqli_query($mysqli, $sql_get_data);
?>

<div class="content">
    <ul class="product_list">
        <?php
        while ($baiviet_arr = mysqli_fetch_array($baiviet)) {
            $idbaiviet = $baiviet_arr['id_baiviet'];
        ?>
        <li class="baiviet_item">
            <a href="index.php?quanly=chitietbaiviet&danhmuc=<?php echo $danhmuc?>&idbaiviet=<?php echo $idbaiviet?>">
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