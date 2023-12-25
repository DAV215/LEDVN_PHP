
<p class="pagename">THÊM SẢN PHẨM</p>
<div class="wrapper">
    <form action="modules/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data">
        <table class="data_table">
            <tr>
                <td>Danh mục</td>
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
                <td><input type="text" name="tensanpham" ></td>
            </tr>

            <tr>
                <td>Kích thước</td>
                <td><input type="text" name="kichthuoc" ></td>
            </tr>
            <tr>
                <td>Mã sp</td>
                <td><input type="text" name="masp" ></td>
            </tr>
            <tr>
                <td>Giá sp</td>
                <td><input type="text" name="giasp" ></td>
            </tr>
            <tr>
                <td>Số lượng sp</td>
                <td><input type="text" name="soluong" ></td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                <td id= "view_img">
                    <div class="img_preview">
                        <img src="" alt="" id="sp_hinh-upload" >
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="file" name="hinhanh" class="upload_img" ></td>
            </tr>
            <tr>
                <td>Tóm tắt</td>
                <td><textarea name="tomtat" id="" cols="30" rows="10" ></textarea></td>
            </tr>
            <tr>
                <td>Nội dung</td>
                <td><textarea name="noidung" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Tình trạng</td>
                <td>
                    <select name="tinhtrang" id="">
                        <option value="1">Kích hoạt</option>
                        <option value="0">Ẩn</option>
                    </select>
                </td>
            </tr>
                <tr>
                <td colspan="2"><input class="submit_btn" type="submit" name="themsanpham" value="Xác nhận thêm sản phẩm"></td>
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