<p>Liệt kê danh mục sản phẩm</p>
<?php
    $sql_lietke_danhmucbaiviet = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
    $query_lietke_danhmucbaiviet = mysqli_query($mysqli, $sql_lietke_danhmucbaiviet);
?>
<table class="data_table">
    <tr>
        <th>Số thứ tự</th>
        <th>Tên danh mục</th>
        <th>Tác vụ</th>
    </tr>

    <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_danhmucbaiviet)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['tendanhmuc_baiviet']?></td>
                <td class="tacvu">
                    <a href="modules/quanlydanhmucbaiviet/xuly.php?iddanhmuc=<?php echo $row['id_danhmucbaiviet']?>">Xóa</a>
                    
                    <a href="?action=quanlydanhmucbaiviet&query=sua&iddanhmuc=<?php echo $row['id_danhmucbaiviet'] ?>">Sửa</a>
                </td>
            </tr>
        <?php
        }
        ?>
    ?>
</table>