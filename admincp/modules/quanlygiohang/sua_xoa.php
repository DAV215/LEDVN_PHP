<?php 
    $query = $_GET['query'];
    $cart_code= $_GET['cart_code'];

    if($query == 'xoa'){
        $sql_cmd = "DELETE FROM tbl_cart WHERE cart_code = '$cart_code'";
        mysqli_query($mysqli, $sql_cmd);
        header('Location:../admincp/admincp_index.php?action=quanlygiohang&query=lietke');
        exit();
    }else{
        $sql_cmd = "SELECT * from tbl_cartdetail WHERE code_cart = '".$cart_code."'";
        $query = mysqli_query($mysqli, $sql_cmd);
        $id = array();
        
        
    }
    // $user_gmail =$_GET['user_gmail'];

    
?>
<div class="giohang" >
    <table class="data_table tbl_giohang">
        <tr>
            <th>ID</th>
            <th>ID_SP</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Kích thước</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>

        <?php
            $i = 0;
            $tamtinh =0;
            while ($row = mysqli_fetch_array($query)) {
                $i++;
        ?>
                <?php
                    $id_sanpham = $row['id_sanpham'];
                    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id_sanpham'";
                    $cart_query= mysqli_query($mysqli, $sql);
                    $cart_data = mysqli_fetch_array($cart_query)
                ?>                
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $cart_data['id_sanpham']?></td>
                    <td><?php echo $cart_data['tensp']?></td>
                    <td><img src="modules/quanlysanpham/uploads/<?php echo $cart_data['hinhanh'];?>" style="width:200px;"></td>
                    <td><?php echo $cart_data['kichthuoc']?></td>
                    <td><?php echo number_format($cart_data['giasp']);?></td>
                    <td><?php echo $row['soluong']?></td>
                    <td>
                        <?php
                            $tamtinh += $row['soluong']*$cart_data['giasp'];
                            echo number_format($tamtinh);
                        ?>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
    <div class="thanhtoan">
                <h1>Cộng giỏ hàng</h1>
                <table class="data_table">
                    <tr>
                        <th>Tạm tính</th>
                        <td><?php echo number_format($tamtinh) ?></td>
                    </tr>
                    <tr>
                        <th>Giao hàng</th>
                        <td style="color:#6f6d6d;"><input type="text" name="phiship" id="phiship" oninput="updateTotal()" style="text-align: end;font-size: large;"></td>
                    </tr>                
                    <tr style="border-bottom: 2px solid #ccc !important;">
                        <th>Tổng tiền</th>
                        <td id="totalAmount" style="color:#ff0000; font-size: large; font-weight: bolder;">  <?php echo '~'.number_format($tamtinh) ?></td>
                    </tr>
                </table>
                <form action="" method="POST">
                    <button type="submit" name="hoanhthanhdonhang">Đã xong</button>
                </form>
    </div>
</div>


<script>
  function updateTotal() {
    // Get the value from the phiship input
    var phishipValue = document.getElementById("phiship").value;

    // Update the total amount
    var tamtinh = <?php echo $tamtinh; ?>; // Initial tamtinh value
    var totalAmount = tamtinh + parseFloat(phishipValue);

    // Update the content of the total amount td
    document.getElementById("totalAmount").innerHTML = '~' + totalAmount.toLocaleString();
  }
</script>
