<p class="pagename">THỐNG KÊ BÀI VIẾT</p>

<?php
    $sql_lietke_baiviet = "SELECT * FROM tbl_banner ORDER BY id DESC";
    $query_lietke_baiviet = mysqli_query($mysqli, $sql_lietke_baiviet);
?>
<table class="data_table">
    <tr>
        <th>STT</th>
        <th>Tên banner</th>
        <th>Nội dung</th>
        <th>Hình ảnh</th>
        <th>Tác vụ</th>
    </tr>

    <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_baiviet)) {
            $i++;
    ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['title']?></td>
                <td><?php echo $row['content']?></td>
                <td><img src="modules/quanlybanner/uploads/<?php echo $row['link_img']?>" alt="" srcset=""></td>
                <td class="tacvu">
                    <a href="modules/quanlybanner/xuly.php?id=<?php echo $row['id']?>">Xóa</a>
                    
                    <a href="?action=quanlybanner&query=sua&id=<?php echo $row['id'] ?>">Sửa</a>
                </td>
            </tr>
    <?php
        }
    ?>
</table>