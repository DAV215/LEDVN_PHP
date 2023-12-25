<p class="pagename">SỬA BÀI VIẾT</p>

<?php
    $sql_sua_baiviet = "SELECT * FROM tbl_baiviet WHERE id_baiviet = '$_GET[idbaiviet]' ";
    $query_sua_baiviet = mysqli_query($mysqli, $sql_sua_baiviet);
    $row = mysqli_fetch_array($query_sua_baiviet);
?>
<div class="wrapper">
<form action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>" method="post" enctype="multipart/form-data">
        <table class="data_table">
            <tr>
                <td>Danh mục sản phẩm</td>
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
                <td><input type="text" name="tenbaiviet" value="<?php echo $row['tenbaiviet'] ?>"></td>
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
            </tr>
                <tr>
                <td colspan="2"><input class="submit_btn" type="submit" name="suabaiviet" value="Xác nhận sửa bài viết"></td>
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