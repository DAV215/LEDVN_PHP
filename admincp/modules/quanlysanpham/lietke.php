<p class="pagename">THỐNG KÊ SẢN PHẨM</p>

<?php
//Check nut nhan bo loc
    if(isset($_POST['SP_filter_active_btn']) || isset($filter["active"])){
        if(isset($_POST['page'])){
            $_SESSION['SP_filter'][3] =  $_POST['page'];
        }
        else $_SESSION['SP_filter'] = array(1, $_POST['danhmuc'], $_POST['noibat'], 0);
    }
    else{
        if(isset($_POST['page'])){
            $_SESSION['SP_filter'][3] =  $_POST['page'];
        }
        else $_SESSION['SP_filter'] = array(0, "all", 0, $_POST['page']);
    }
//Check Session dajng loc
    if(isset( $_SESSION['SP_filter'])){
        if(isset($_POST['page'])){
            $_SESSION['SP_filter'][3] =  $_POST['page'];
        }
        $filter = array("active" => $_SESSION['SP_filter'][0], "danhmuc" => $_SESSION['SP_filter'][1], "noibat" => $_SESSION['SP_filter'][2], "page" => $_SESSION['SP_filter'][3]);
    }
    else{
        $_SESSION['SP_filter'] = array(0, "all", 0, 0);
        $filter = array("active" => $_SESSION['SP_filter'][0], "danhmuc" => $_SESSION['SP_filter'][1], "noibat" => $_SESSION['SP_filter'][2], $_SESSION['SP_filter'][2]);
    }
    if($filter["active"]){
        if($filter['danhmuc']== "ALL"){
            if( $filter["noibat"]==1){
                $sql_lietke_allsp = "SELECT * FROM tbl_sanpham WHERE noibat = '".$filter['noibat']."'  ORDER BY id_sanpham DESC";
                $query_lietke_allsp = mysqli_query($mysqli, $sql_lietke_allsp);
                $number_of_product = mysqli_num_rows($query_lietke_allsp);
                if(!isset( $filter["page"])){
                    $sql_lietke_sp = "SELECT * FROM tbl_sanpham WHERE noibat = '".$filter['noibat']."'  LIMIT 0,5 ";
                    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
                }
                else{
                    $pro_start = $filter["page"]*5;
                    $sql_lietke_sp = "SELECT * FROM tbl_sanpham WHERE noibat = '".$filter['noibat']."'  LIMIT $pro_start,5 ";
                    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
                }
            }
            else{
                $sql_lietke_allsp = "SELECT * FROM tbl_sanpham  ORDER BY id_sanpham DESC";
                $query_lietke_allsp = mysqli_query($mysqli, $sql_lietke_allsp);
                $number_of_product = mysqli_num_rows($query_lietke_allsp);
                if(!isset( $filter["page"])){
                    $sql_lietke_sp = "SELECT * FROM tbl_sanpham  LIMIT 0,5 ";
                    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
                }
                else{
                    $pro_start = $filter["page"]*5;
                    $sql_lietke_sp = "SELECT * FROM tbl_sanpham  LIMIT $pro_start,5 ";
                    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
                }
            }
        }
        else{
            if( $filter["noibat"]==1){
                $sql_lietke_allsp = "SELECT * FROM tbl_sanpham WHERE noibat = '".$filter['noibat']."' AND danhmucsanpham = '".$filter['danhmuc']."'  ORDER BY id_sanpham DESC";
                $query_lietke_allsp = mysqli_query($mysqli, $sql_lietke_allsp);
                $number_of_product = mysqli_num_rows($query_lietke_allsp);
                if(!isset($_POST['page'])){
                    $sql_lietke_sp = "SELECT * FROM tbl_sanpham WHERE noibat = '".$filter['noibat']."' AND danhmucsanpham = '".$filter['danhmuc']."'  LIMIT 0,5 ";
                    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
                }
                else{
                    $pro_start = $_POST['page']*5;
                    $sql_lietke_sp = "SELECT * FROM tbl_sanpham WHERE noibat = '".$filter['noibat']."' AND danhmucsanpham = '".$filter['danhmuc']."'  LIMIT $pro_start,5 ";
                    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
                }
            }
            else{
                $sql_lietke_allsp = "SELECT * FROM tbl_sanpham WHERE danhmucsanpham = '".$filter['danhmuc']."' ORDER BY id_sanpham DESC";
                $query_lietke_allsp = mysqli_query($mysqli, $sql_lietke_allsp);
                $number_of_product = mysqli_num_rows($query_lietke_allsp);
                if(!isset($_POST['page'])){
                    $sql_lietke_sp = "SELECT * FROM tbl_sanpham WHERE danhmucsanpham = '".$filter['danhmuc']."' LIMIT 0,5 ";
                    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
                }
                else{
                    $pro_start = $_POST['page']*5;
                    $sql_lietke_sp = "SELECT * FROM tbl_sanpham WHERE danhmucsanpham = '".$filter['danhmuc']."' LIMIT $pro_start,5 ";
                    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
                }
            }
        }
    }
    else{
        $sql_lietke_allsp = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham";
        $query_lietke_allsp = mysqli_query($mysqli, $sql_lietke_allsp);
        $number_of_product = mysqli_num_rows($query_lietke_allsp);
        if(!isset($_POST['page'])){
            $sql_lietke_sp = "SELECT * FROM tbl_sanpham  LIMIT 0,5 ";
            $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
        }
        else{
            $pro_start = $_POST['page']*5;
            $sql_lietke_sp = "SELECT * FROM tbl_sanpham  LIMIT $pro_start,5 ";
            $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
        }
    }
?>
<table class="data_table">
    <form action="" id="filter_data" method="POST">
        <tr>
            <button class="filter_active_btn" name = "SP_filter_active_btn" value="1">Bật bộ lọc</button>
            <button class="filter_active_btn" name = "SP_filter_active_btn" value="0">Tắt bộ lọc</button>
        </tr>
        <tr>
            <th>ID</th>
            <th>Danh mục sản phẩm
                <select name="danhmuc" id="" >
                    <option value="ALL"> ALL</option>
                    <?php 
                        $query_get_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                        $sql_danhmuc = mysqli_query($mysqli, $query_get_danhmuc);
                        $i = 0;
                        while($danhmuc = mysqli_fetch_array($sql_danhmuc)){
                            $i++;
                        ?>
                            <option type="submit" value="<?php echo $danhmuc['tendanhmuc'] ?>"> <?php echo $danhmuc['tendanhmuc'] ?></option>
                        <?php 
                        }
                    ?>
                </select>
            </th>
            <th>Tên sản phẩm</th>
            <th>Kích thước</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Mã SP</th>
            <th>Tóm tắt</th>
            <th>Trạng thái</th>
            <th>Tác vụ</th>
            <th>
                Nổi bật
                <select name="noibat" id="" >
                    <option value="0">Bỏ lọc</option>
                    <option value="1">Lọc</option>

                </select>
            </th>
        </tr>
    </form>
    <?php
        if(isset($_POST['page'])){
            $i = $_POST['page']*5;
        }
        else $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_sp)) {
            $i++;
    ?>
        <form action="" method="post">
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['danhmucsanpham']?></td>
                <td><?php echo $row['tensp']?></td>
                <td><?php echo $row['kichthuoc']?></td>
                <td><img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh']?>" alt="<?php echo $row['hinhanh']?>"  ></td>
                <td><?php echo $row['giasp']?></td>
                <td><?php echo $row['soluong']?></td>
                <td><?php echo $row['masp']?></td>
                <td><?php echo $row['tomtat']?></td>
                <td><?php if($row['tinhtrang'] == 1){ echo 'Kích hoạt';} else {echo 'Ẩn';}?></td>

                <td class="tacvu">
                    <div class="tacvu_content">
                        <a href="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xóa</a>
                        <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
                        <?php 
                            if($row['noibat'] == 0){
                                echo '<a href="?action=quanlysanpham&query=noibat&idsanpham=' . $row['id_sanpham'] . '">Ghim nổi bật</a>';

                            }
                            else{
                                echo '<a href="?action=quanlysanpham&query=xoanoibat&idsanpham=' . $row['id_sanpham'] . 's">Bỏ ghim nổi bật</a>';
                            }
                        ?>
                    </div>
                </td>
                <td>
                    <?php 
                        if($row['noibat'] == 1){
                            echo 'V';
                        }
                    ?>
                </td>
            </tr>
        </form>

    <?php
        }
    ?>
</table>
<div class="Pagination">
    <form action="admincp_index.php?action=quanlysanpham&query=them" method="POST">
        <?php
            $number_pages = ceil($number_of_product / 5);
            for ($i =0; $i < $number_pages; $i++) {
                echo '<button type="submit" name = "page" value = "'.$i.'">'.$i.'</button>';
            }
        ?>
    </form>
</div>
<script>
    function submit(){
        var form =document.getElementById("filter_data").
        form.submit();
    }
</script>