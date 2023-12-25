Sửa danh mục sản phẩm
<?php
    $sql_sua_danhmucbaiviet = "SELECT * FROM tbl_danhmucbaiviet WHERE id_danhmucbaiviet = '$_GET[iddanhmuc]' ";
    $query_sua_danhmucbaiviet = mysqli_query($mysqli, $sql_sua_danhmucbaiviet);
?>
<div class="wrapper">
    <form action="modules/quanlydanhmucbaiviet/xuly.php?iddanhmuc=<?php echo  $_GET['iddanhmuc']?>" method="post">
        <?php 
            while($row = mysqli_fetch_array($query_sua_danhmucbaiviet)){
        ?>
            <table class="data_table">
                <tr>
                    <td>Tên danh mục</td>
                    <td><input type="text" name="tendanhmuc"  value = "<?php echo $row['tendanhmuc_baiviet'] ?>"></td>

                </tr>
                <tr>
                    <td>Thứ tự</td>
                    <td><input type="text" name="thutu" value=" <?php echo $row['thutu'] ?>"></td>
                </tr>
                    <tr>
                    <td colspan="2"><input class="submit_btn" type="submit" name="suadanhmuc" value="Xác nhận sửa danh mục"></td>
                </tr>


            </table>
        <?php
            }
        ?>



    </form>

</div>
