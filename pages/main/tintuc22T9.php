
<link rel="stylesheet" href="asset\css\post_css\post.css">

<ul class="post_list">
    <?php
        $sql_get_data_baiviet = "SELECT * FROM tbl_baiviet ORDER BY id_baiviet DESC LIMIT 0, 3";
        $data_baiviet = mysqli_query($mysqli, $sql_get_data_baiviet);
        $number_of_post = mysqli_num_rows($data_baiviet);
        while ($baiviet_arr = mysqli_fetch_array($data_baiviet)) {
            $idbaiviet = $baiviet_arr['id_baiviet'];
            ?>
            <li class="post_item">
                <a
                    href="index.php?quanly=chitietbaiviet&danhmuc=<?php echo $row_danhmuc['tendanhmuc_baiviet'] ?>&idbaiviet=<?php echo $idbaiviet ?>">
                    <div class="post_img">
                        <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $baiviet_arr['hinhanh'] ?>" alt="">
                    </div>
                    <div class="post_des">
                        <div class="post_summary">
                            <?php echo $baiviet_arr['tomtat'] ?></p>
                        </div>

                    </div>
                </a>

            </li>
    <?php
    }
    ?>
</ul>

