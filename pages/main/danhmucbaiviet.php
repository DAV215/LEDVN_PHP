<?php 

require("pages\call_data\ads_data.php");

    $danhmuc = $_GET['id'];

?>
<link rel="stylesheet" href="asset\css\post_css\postpage.css">

<div class = "tendanhmuc" style="margin-left: 2.5%;">
    
    <a href="index.php?quanly=tintuc"><p style="font-weight: 500;">Bài viết /  </p></p></a>

    <a style="padding-left:5px;" href="index.php?quanly=danhmucbaiviet&id=<?php echo $danhmuc ?>"><p ><?php echo  ' ' .$danhmuc ?></p></a>
</div>


<div class="content">
    <div class="sidebar_post">
            <h2 style="
                    font-size: 20px;
                    border-bottom: 2px solid black;
                    justify-content: center;
                    text-align: center;
            ">Danh mục bài viết</h2>
                    <ul class="danhmuc_name">
                            <?php 
                                    $obj = new post_data2();
                                    $category = $obj->getdanhmuc();
                                    foreach ($category as $item) {

                                            echo ' <li><a href="index.php?quanly=danhmucbaiviet&id='.$item['tendanhmuc_baiviet'] .'">' . $item['tendanhmuc_baiviet'] . '</a></li>';
                                        }
                            ?>
                    </ul>
            </div>
    <div class="post_container">
        <ul class="post_list_2">

        </ul>
        <div class="more_post">

        </div>
    </div>


    
</div>
<script src="asset/js/post_category.js"></script>

