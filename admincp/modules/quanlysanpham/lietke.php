<p class="pagename">THỐNG KÊ SẢN PHẨM</p>

<?php
    
    if(isset($_POST['filter_active_btn'])){
        $noibat = $_POST['noibat'];
        if($_POST['danhmuc']== "ALL"){
            $sql_lietke_sp = "SELECT * FROM tbl_sanpham  WHERE  noibat = '".$noibat."'  ORDER BY id_sanpham DESC";
        }
        else{
            $sql_lietke_sp = "SELECT * FROM tbl_sanpham WHERE danhmucsanpham = '".$_POST['danhmuc']."' AND noibat = '".$noibat."'  ORDER BY id_sanpham DESC";
        }
        $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
    }else{
        $sql_lietke_sp = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC";
        $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
    }
    $number_of_product = mysqli_num_rows($query_lietke_sp);
?>
<table class="data_table">
    <form action="" id="filter_data" method="POST">
        <tr>
            <button class="filter_active_btn" name = "filter_active_btn">Bật bộ lọc</button>
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
        $i = 0;
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
    <form action="" method="POST">
        <?php
            $number_pages = ceil($number_of_product / 6);
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