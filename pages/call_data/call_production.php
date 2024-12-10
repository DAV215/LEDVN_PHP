<?php 
    require_once 'ads_data.php';
    if(isset($_POST['getall_production'])){
        $ads = new post_data();
         echo $ads->getdataAsJson();
    } 
    if(isset($_POST['get_production_atpage'])){
        $page = $_POST['page'];
        $product_category = $_POST['product_category'];
        $limit = $page*8;
        $offset = $limit - 8;
        $sv = new DBDriver;
        $all_element = count($sv->getAllWhere('tbl_sanpham', 'id_sanpham', " `danhmucsanpham` =  '$product_category' ")); 
        $data_get = $sv->getAllWhere('tbl_sanpham'," * ", " `danhmucsanpham` = '$product_category'  LIMIT 8 OFFSET $offset");
        $data_send = [  
            'quantity_all' => $all_element,
            'data_atpage' => $data_get
        ];
        echo json_encode($data_send);
    } 
?>