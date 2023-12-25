<?php
    $idsanpham = $_GET['idsanpham'];
    $query_get_data = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '".$idsanpham."'";
    $sql_data = mysqli_query($mysqli, $query_get_data);
    $product_info = mysqli_fetch_array($sql_data);

    $action = $_GET['action'];
    if ($action == 'them' || $action == 'cong' || $action == 'tru')  {
        $new_product = array('id_sanpham' => $product_info['id_sanpham'], 'tensp' => $product_info['tensp'], 'kichthuoc' => $product_info['kichthuoc'],
        'masp' => $product_info['masp'], 'giasp' => $product_info['giasp'], 'soluong' =>1,
        'hinhanh' => $product_info['hinhanh']);
        
        if (!isset($_SESSION['cart']) && $action == 'them') {
            $_SESSION['cart'] = array();
        }
        $product_exists = false;
        foreach ($_SESSION['cart'] as $key => $cart_item) {
            if ($cart_item['id_sanpham'] == $idsanpham) {
                $product_exists = true;
                if($action=='them' || $action== 'cong') {
                    $soluong = $cart_item['soluong']+1;
                }else{
                    $soluong = $cart_item['soluong']-1;
                    if($soluong === 0){
                        $action = 'xoa';
                        break;
                    }
                }
                $product = array('id_sanpham' => $product_info['id_sanpham'], 'tensp' => $product_info['tensp'], 'kichthuoc' => $product_info['kichthuoc'],
                'masp' => $product_info['masp'], 'giasp' => $product_info['giasp'], 'soluong' => $soluong,
                'hinhanh' => $product_info['hinhanh']);
                $_SESSION['cart'][$key] = $product;
                break;
            }
        }
        if (!$product_exists) {
            $_SESSION['cart'][] = $new_product;
        }
    }
    elseif($action == 'xoa') {
        foreach ($_SESSION['cart'] as $key => $cart_item) {
            if ($cart_item['id_sanpham'] == $idsanpham) {
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
    }
    echo "<script>window.location.href='index.php?quanly=giohang'</script>";
?>
