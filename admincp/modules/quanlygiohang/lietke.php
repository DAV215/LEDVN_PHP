<p class="pagename">THỐNG KÊ ĐƠN HÀNG</p>

<?php
    $sql_lietke_sp = "SELECT * FROM tbl_cart ORDER BY id_cart DESC";
    $query_lietke_cart= mysqli_query($mysqli, $sql_lietke_sp);
?>
<table class="data_table">
    <tr>
        <th>ID</th>
        <th>Ngày</th>
        <th>Mã đơn hàng</th>
        <th>Khách hàng</th>
        <th>Mail</th>
        <th>SDT</th>
        <th>Trạng thái</th>
        <th>Tác vụ</th>
    </tr>

    <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lietke_cart)) {
            $i++;
    ?>
            <?php
                $id_user = $row['id_user'];
                $sql_user = "SELECT * FROM tbl_userlogin WHERE id_user = '$id_user'";
                $query_user= mysqli_query($mysqli, $sql_user);
                $row_user = mysqli_fetch_array($query_user);

            ?>                
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['cart_date']?></td>
                <td><?php echo $row['cart_code']?></td>
                <td><?php echo $row_user['user_name']?></td>
                <td><?php echo $row_user['user_gmail']?></td>
                <td><?php echo $row_user['user_sdt']?></td>
                <td><?php if($row['cart_status'] == 1){ echo 'Đang xử lý';} else {echo 'Đã xong';}?></td>

                <td class="tacvu">
                    <a href="admincp_index.php?action=quanlygiohang&query=xem&cart_code=<?php echo $row['cart_code']?>&user_gmail=<?php echo $row_user['user_gmail']?>">Xem</a>
                    <a href="admincp_index.php?action=quanlygiohang&query=xoa&cart_code=<?php echo $row['cart_code']?>">Xóa</a>
                    <a href="admincp_index.php?action=quanlygiohang&query=hoanthanh&cart_code=<?php echo $row['cart_code']?>">Hoàn thành</a>
                </td>
            </tr>
    <?php
        }
    ?>
</table>