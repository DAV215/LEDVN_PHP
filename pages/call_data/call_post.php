<?php 
    require_once 'ads_data.php';
    if(isset($_POST['getall_post'])){
        $ads = new post_data();
         echo $ads->getdataAsJson();
    } 
    if(isset($_POST['get_post_atpage'])){
        $page = $_POST['page'];
        $limit = $page*3;
        $offset = $limit - 3;
        $sv = new post_data2();
        $allpost = count($sv->getAllWhere('tbl_baiviet', 'id_baiviet', '1'));
        $data_get = $sv->get_thumbnail("1  LIMIT $limit OFFSET $offset");
        $data_send = [
            'quantity_all' => $allpost,
            'data_atpage' => $data_get
        ];
        echo json_encode($data_send);
    } 
    if(isset($_POST['get_post_at_category'])){
        $page = $_POST['page'];
        $post_category = $_POST['post_category'];
        $limit = $page*3;
        $offset = $limit - 3;
        $sv = new DBDriver;
        $all_element = count($sv->getAllWhere('tbl_baiviet', 'id_baiviet', " `danhmucbaiviet` =  '$post_category' ")); 
        $data_get = $sv->getAllWhere('tbl_baiviet'," * ", " `danhmucbaiviet` = '$post_category'  LIMIT 3 OFFSET $offset");
        $data_send = [  
            'quantity_all' => $all_element,
            'data_atpage' => $data_get
        ];
        echo json_encode($data_send);
    } 
?>