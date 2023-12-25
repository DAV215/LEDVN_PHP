
<p class="pagename">THÊM SẢN PHẨM</p>
<div class="wrapper">
    <form action="modules/quanlybaiviet/xuly.php" method="post" enctype="multipart/form-data">
        <table class="data_table">
            <tr>
                <td>Danh mục</td>
                <td>
                    <select name="danhmucbaiviet" id="">
                        <?php 
                            $query_get_danhmucbaiviet = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_danhmucbaiviet DESC";
                            $sql_danhmucbaiviet = mysqli_query($mysqli, $query_get_danhmucbaiviet);
                            $i = 0;
                            while($danhmucbaiviet = mysqli_fetch_array($sql_danhmucbaiviet)){
                                $i++;
                            ?>
                                <option value="<?php echo $danhmucbaiviet['tendanhmuc_baiviet'] ?>"> <?php echo $danhmucbaiviet['tendanhmuc_baiviet'] ?></option>
                            <?php 
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tên bài viết</td>
                <td><input type="text" name="tenbaiviet" ></td>
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
                <td colspan="2"><input class="submit_btn" type="submit" name="thembaiviet" value="Xác nhận thêm bài viết"></td>
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