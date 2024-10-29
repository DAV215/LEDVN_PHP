<?php 
    $danhmuc = $_GET['id'];
require("pages/call_data/ads_data.php");

?>
<link rel="stylesheet" href="asset/css/production_css/production_mainpage.css">
<link rel="stylesheet" href="asset/css/production_css/production_category.css">
<link rel="stylesheet" href="asset/css/post_css/postpage.css">

<div class="content">

</div>

<div class = "tendanhmuc" >
    
    <a href="index.php?quanly=sanpham"><p style="font-weight: 500;">Sản phẩm / </p></p></a>

    <a style="padding-left: 5px;" href="index.php?quanly=danhmucsanpham&id=<?php echo $danhmuc ?>"><p ><?php echo  ' '.$danhmuc ?></p></a>
</div>


<div class="content">
    <div class="sidebar_post">
        <h2 style="
            font-size: 20px;
            border-bottom: 2px solid black;
            justify-content: center;
            text-align: center;
    ">Danh mục sản phẩm</h2>
            <ul class="danhmuc_name">
                    <?php 
                            $obj = new DBDriver;
                            $category = $obj->getAllWhere  ('tbl_danhmuc', 'tendanhmuc', 1);
                            foreach ($category as $item) {

                                    echo ' <li><a href="index.php?quanly=danhmucsanpham&id='.$item['tendanhmuc'] .'">' . $item['tendanhmuc'] . '</a></li>';
                                }
                    ?>
            </ul>
    </div>
    <div class="post_container">
        <ul class="product_list">

        </ul>
        <div class="more_page">

        </div>
    </div>


    
</div>
<script src="asset/js/production.js"></script>
