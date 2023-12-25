<p class="pagename">THỐNG KÊ BÀI VIẾT</p>

<?php
    $sql_lietke_baiviet = "SELECT * FROM tbl_baiviet ORDER BY id_baiviet DESC";
    $query_lietke_baiviet = mysqli_query($mysqli, $sql_lietke_baiviet);
?>
<table class="data_table">
    <tr>
        <th>ID</th>
        <th>Danh mục bài viết</th>
        <th>Tên bài viết</th>
        <th>AVT</th>
        <th>Tóm tắt</th>
        <th>Ngày viết</th>
        <th>Tác vụ</th>
    </tr>

    <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_baiviet)) {
            $i++;
    ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['danhmucbaiviet']?></td>
                <td><?php echo $row['tenbaiviet']?></td>
                <td><img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh']?>" alt="" srcset=""></td>
                <td><?php echo $row['tomtat']?></td>
                <td><?php echo $row['ngayviet']?></td>

                <td class="tacvu">
                    <a href="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet']?>">Xóa</a>
                    
                    <a href="?action=quanlybaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>">Sửa</a>
                </td>
            </tr>
    <?php
        }
    ?>
</table>