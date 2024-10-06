
<p class="pagename">THÊM SẢN PHẨM</p>
<div class="wrapper">
    <form action="modules/quanlybaiviet/xuly.php" method="post" enctype="multipart/form-data">
        <table class="data_table">

            <tr>
                <td>Tên Banner</td>
                <td><input type="text" name="title" ></td>
            </tr>
            <tr>
                <td>Nội dung</td>
                <td><textarea name="content" id="" cols="30" rows="10" ></textarea></td>
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
            <td colspan="2"><input type="file" name="link_img" class="upload_img" onchange=readURL(event)></td>

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
    function readURL(event) {
        var input = event.target; // Get the input element
        var img_preview_cell = document.getElementById('view_img');
        var img_tag = document.getElementById('link_img');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                img_tag.src = e.target.result; // Set the image source
                img_tag.style.display = 'block'; // Show the image
                img_preview_cell.style.textAlign = 'center'; // Center the image
            }

            reader.readAsDataURL(input.files[0]); // Read the uploaded file
        } else {
            // If no file is selected, clear the previous image
            img_tag.src = '';
            img_tag.style.display = 'none'; 
        }
    }
</script>