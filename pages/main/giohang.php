<?php

    if(isset($_POST['thanhtoan_btn'])){
        // echo ' <script>alert("đang thanh toán");</script>';
        if(!isset($_SESSION['user_login'])){
            echo "<script>window.location.href='pages/main/login.php'</script>";
        } else{
            // echo ' <script>alert("'.$_SESSION['user_login'].'");</script>';
            if(isset($_SESSION['cart'])){
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $time = strftime("%Y-%m-%d %H:%M:%S", time());
                $code_cart = rand(0,9999);
                $id_user = $_SESSION['id_user'];
                $sql_query = "INSERT INTO tbl_cart( cart_date, cart_code, id_user, cart_status) 
                            VALUES ('".$time."','".$code_cart."','".$id_user."',1)";
                $sql_cmd = mysqli_query($mysqli, $sql_query);
                foreach($_SESSION['cart'] as $value){      
                    $sql_query= "INSERT INTO tbl_cartdetail( code_cart, id_sanpham, soluong) 
                    VALUES ('".$code_cart."', '".$value['id_sanpham']."','".$value['soluong']."')";
                    $sql_cmd = mysqli_query($mysqli, $sql_query);
                }
                unset($_SESSION['cart']);
                echo "<script>window.location.href='index.php?quanly=camon'</script>";
            }
        }
    }
?>

<div class="content">
    <div class="giohang">
        <table class="data_table tbl_giohang">
            <tr>
                <th >Sản phẩm</th> 
                <th>Kích thước</th>
                <th>Hình ảnh</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>

            <?php
                $i = 0;
                $tamtinh = 0;
                if(isset($_SESSION['cart'])){
                    foreach ($_SESSION['cart'] as $cart_item) {
                        $i++;
                    ?>
                        <tr>
                            <td >
                                <div style="display:flex;">
                                    <div>
                                        <form action="index.php?quanly=themgiohang&idsanpham=<?php echo $cart_item['id_sanpham']?>&action=xoa" method="post">
                                            <input type="submit" value="X" class="del_item">
                                        </form>
                                    </div>
                                    <div>
                                        <?php echo $cart_item['tensp']?>
                                    </div>
                                </div>
                            </td>
                            <td><?php echo $cart_item['kichthuoc']?></td>
                            <td><img src="admincp/modules/quanlysanpham/uploads/<?php echo $cart_item['hinhanh']?>" alt="<?php echo $cart_item['hinhanh']?>"  ></td>
                            <td><?php echo number_format( $cart_item['giasp'])?></td>
                            <td>
                                <div style="display:flex; align-items: center;">
                                        <div>
                                            <form action="index.php?quanly=themgiohang&idsanpham=<?php echo $cart_item['id_sanpham']?>&action=cong" method="post">
                                                <input type="submit" value="+" class="del_item" style="padding: 0; padding: 0 5px; font-size:30px;">
                                            </form>
                                        </div>
                                        <div style=" padding: 0 10px;">
                                            <?php echo $cart_item['soluong']?>
                                        </div>
                                        <div>
                                            <form action="index.php?quanly=themgiohang&idsanpham=<?php echo $cart_item['id_sanpham']?>&action=tru" method="post">
                                                <input type="submit" value="-" class="del_item" style="padding: 0; padding: 0 5px; font-size:30px;">
                                            </form>
                                        </div>
                                </div>
                            </td>
                            <td><?php echo number_format( $cart_item['soluong']*$cart_item['giasp'] ) ?></td>
                            <?php $tamtinh += $cart_item['soluong']*$cart_item['giasp']; ?>
                        </tr>
                    <?php
                    }
                }else{
                    echo '<p>Oh, bạn chưa có sản phẩm nào trong giỏ hàng :((</p>';
                    
                }
            ?>
        </table>
        <table class="tbl_giohang_mobile">
            <img style="width:50%; height:auto; margin-left: 25%;" src="asset\images\Cart\shopping-cart.gif" alt="" class="shoppingcart_icon">
            <tr>
                <th>Sản phẩm</th>
                <th>Miêu tả</th>
                <th>Số lượng</th>
            </tr>
            <?php
                $i = 0;
                $tamtinh = 0;
                if(isset($_SESSION['cart'])){
                    foreach ($_SESSION['cart'] as $cart_item) {
            ?>
                        <tr >
                                <td class= "cart_item_mobile_img"><img src="admincp/modules/quanlysanpham/uploads/<?php echo $cart_item['hinhanh']?>" alt="<?php echo $cart_item['hinhanh']?>"  ></td>
                                <td class="cart_item_mobile_des">
                                    <div class="cart_item_mobile_des_name">
                                        <?php echo $cart_item['tensp']; ?>
                                    </div>
                                    <div class="cart_item_mobile_des_KT">
                                        <?php echo 'KT: '.$cart_item['kichthuoc']; ?>
                                    </div>
                                    <div class="cart_item_mobile_des_price">
                                        <?php echo $cart_item['soluong'].' * '; ?> 
                                        <span style="font-weight: 700;">
                                            <?php echo number_format($cart_item['giasp']).' đ '; ?>
                                        </span>
                                    </div>
                                </td>
                                <td class="cart_item_mobile_number">
                                    <form action="index.php?quanly=themgiohang&idsanpham=<?php echo $cart_item['id_sanpham']?>&action=cong" method="post">
                                        <button type=submit>+</button>
                                    </form>
                                    <span style="font-weight: 700; padding: 0 5px;">
                                            <?php echo number_format($cart_item['soluong']); ?>
                                    </span>
                                    <form action="index.php?quanly=themgiohang&idsanpham=<?php echo $cart_item['id_sanpham']?>&action=tru" method="post">
                                        <button type=submit>-</button>
                                    </form>
                                </td>
                            <?php $tamtinh += $cart_item['soluong']*$cart_item['giasp']; ?>
                        </tr>
            <?php
                    }
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
                    <td style="color:#6f6d6d;">Theo đơn giá của ứng dụng giao hàng</td>
                </tr>                
                <tr style="border-bottom: 2px solid #ccc !important;">
                    <th>Tổng tiền</th>
                    <td style="color:#ff0000; font-size: large; font-weight: bolder;">  <?php echo '~'.number_format($tamtinh) ?></td>
                </tr>
            </table>
            <form action="" method="POST">
                <button type="submit" name="thanhtoan_btn">Nhận báo giá và tư vấn</button>
            </form>

        </div>
    </div>
    

</div>