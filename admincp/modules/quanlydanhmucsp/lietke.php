<p>Liệt kê danh mục sản phẩm</p>
<?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<table class="data_table">
    <tr>
        <th>Số thứ tự</th>
        <th>Tên danh mục</th>
        <th>Tác vụ</th>
    </tr>

    <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['tendanhmuc']?></td>
                <td class="tacvu">
                    <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a>
                    
                    <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
                </td>
            </tr>
        <?php
        }
        ?>
    ?>
</table>