<p class="pagename">SỬA SẢN PHẨM</p>

<?php
    $sql_sua_sanpham = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' ";
    $query_sua_sanpham = mysqli_query($mysqli, $sql_sua_sanpham);
    $row = mysqli_fetch_array($query_sua_sanpham);
?>
<div class="wrapper">
<form action="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" method="post" enctype="multipart/form-data">
        <table class="data_table">
            <tr>
                <td>Danh mục sản phẩm</td>
                <td>
                    <select name="danhmucsanpham" id="">
                        <?php 
                            $query_get_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                            $sql_danhmuc = mysqli_query($mysqli, $query_get_danhmuc);
                            $i = 0;
                            while($danhmuc = mysqli_fetch_array($sql_danhmuc)){
                                $i++;
                            ?>
                                <option value="<?php echo $danhmuc['tendanhmuc'] ?>"> <?php echo $danhmuc['tendanhmuc'] ?></option>
                            <?php 
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" name="tensanpham" value="<?php echo $row['tensp'] ?>"></td>
            </tr>
            <tr>
                <td>Kích thước</td>
                <td><input type="text" name="kichthuoc" value="<?php echo $row['kichthuoc'] ?>"></td>
            </tr>
            <tr>
                <td>Mã sp</td>
                <td><input type="text" name="masp" value="<?php echo $row['masp'] ?>"></td>
            </tr>
            <tr>
                <td>Giá sp</td>
                <td><input type="text" name="giasp" value="<?php echo $row['giasp'] ?> "></td>
            </tr>
            <tr>
                <td>Số lượng sp</td>
                <td><input type="text" name="soluong" value="<?php echo $row['soluong'] ?>"></td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                <td><img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" alt=""></td>
            </tr>
            <tr>
                <td>Hình ảnh thay thế</td>
                <td id= "view_img">
                    <div class="img_preview">
                        <img src="" alt="" id="sp_hinh-upload" >
                    </div>
                </td>

            </tr>
            <tr>
                <td colspan="2">
                    <input class="upload_img" type="file" name="hinhanh" onchange="readURL(this)">
                </td>
            </tr>
            <tr>
                <td>Tóm tắt</td>
                <td>
                    <textarea name="tomtat" cols="30" rows="10" >
                        <?php
                            echo $row['tomtat'];
                        ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Nội dung</td>
                <td>
                    <textarea name="noidung"  cols="30" rows="10">
                        <?php
                            echo $row['noidung'];
                        ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Tình trạng</td>
                <td>
                    <select name="tinhtrang" >
                        <option value="1">Kích hoạt</option>
                        <option value="0">Ẩn</option>
                    </select>
                </td>
            </tr>
                <tr>
                <td colspan="2"><input class="submit_btn" type="submit" name="suasanpham" value="Xác nhận sửa sản phẩm" onsubmit="return confirm_data"></td>
            </tr>
        </table>

    </form>

</div>
<script  src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    // Sử dụng FileReader để đọc dữ liệu tạm trước khi upload lên Server
    function readURL(input) {
        var reader = new FileReader();
        var img_preview_cell  = document.getElementById('view_img');
            reader.onload = function (e) {
                img_preview_cell.innerHTML = '<img src="' + e.target.result + '">';
            }
            reader.readAsDataURL(input.files[0]);
    }
</script>