<link rel="stylesheet" href="asset\css\Menu_css\Menu.css?v=1">
<?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);

?>
<div class="menu pc" id="menu">
            <ul>
                <li><a href="index.php?quanly=trangchu">Trang chủ</a></li>
                <li>
                    <a href="index.php?quanly=sanpham">Sản phẩm</a>
                    <div class="dropdown_item" >
                        <?php
                        while ($row_lietke_danhmucsp = mysqli_fetch_array($query_lietke_danhmucsp)) {
                        ?>
                            <ul>
                                <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_lietke_danhmucsp['tendanhmuc'] ?>">
                                    <?php echo $row_lietke_danhmucsp['tendanhmuc'] ?>
                                </a>
                            </ul>
                        <?php
                        }
                        ?>
                    </div>
                </li>
                <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
                <li>
                <?php
                    $sql_lietke_danhmucnaiviet = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
                    $query_lietke_danhmucnaiviet = mysqli_query($mysqli, $sql_lietke_danhmucnaiviet);
                ?>
                    <a href="index.php?quanly=tintuc">Bảng tin</a>
                    <div class="dropdown_item" >
                        <?php
                        while ($row_lietke_danhmucbaiviet = mysqli_fetch_array($query_lietke_danhmucnaiviet)) {
                        ?>
                            <ul>
                                <a href="index.php?quanly=danhmucbaiviet&id=<?php echo $row_lietke_danhmucbaiviet['tendanhmuc_baiviet'] ?>">
                                    <?php echo $row_lietke_danhmucbaiviet['tendanhmuc_baiviet'];?>
                                </a>
                            </ul>
                        <?php
                        }
                        ?>
                    </div>
                </li>
                <li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
                <li>
                    <?php 
                        if(isset($_SESSION['user_login'])){
                    ?>
                            <a href="index.php?quanly=dangxuat">Đăng xuất <?php echo $_SESSION['user_login']; ?></a>
                    <?php
                        }
                        else{
                    ?>
                            <a href="index.php?quanly=dangnhap">Đăng nhập </a>
                    <?php
                        }
                    ?>
                </li>
                <li class="search">
                    <form action="index.php?quanly=timkiem" method="post">
                        <input type="search"  id="" name="search_content" placeholder="Tìm kiếm">
                        <button type="submit">Search</button>
                        <!-- <a href="index.php?quanly=timkiem" name=""><i class="fa-solid fa-magnifying-glass"></i></a> -->
                    </form>
                </li>

            </ul>
</div>
<div class="menu moblie" id="menu_mb">
    <li class="search">
        <form action="index.php?quanly=timkiem" method="post">
            <input type="search"  id="" name="search_content" placeholder="Tìm kiếm">
            <button type="submit">Search</button>
            <!-- <a href="index.php?quanly=timkiem" name=""><i class="fa-solid fa-magnifying-glass"></i></a> -->
        </form>
    </li>
    <button id="showmenu_moblie" onclick="menu_mobile()"><i class="fa-solid fa-bars"></i></button>
</div>
<div id="content_menu_moblie" class="nonshow">
        <li>
            <a href="index.php?quanly=trangchu">Trang chủ</a>
        </li>
        <li>
            <a href="index.php?quanly=sanpham">Sản phẩm</a>
            <div class="dropdown_item" >
                <?php
                while ($row_lietke_danhmucsp = mysqli_fetch_array($query_lietke_danhmucsp)) {
                ?>
                    <ul>
                        <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_lietke_danhmucsp['tendanhmuc'] ?>">
                            <?php echo $row_lietke_danhmucsp['tendanhmuc'] ?>
                        </a>
                    </ul>
                <?php
                }
                ?>
            </div>
        </li>
                <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
                <li>
                <?php
                    $sql_lietke_danhmucnaiviet = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
                    $query_lietke_danhmucnaiviet = mysqli_query($mysqli, $sql_lietke_danhmucnaiviet);
                ?>
                    <a href="index.php?quanly=tintuc">Bảng tin</a>
                    <div class="dropdown_item" >
                        <?php
                        while ($row_lietke_danhmucbaiviet = mysqli_fetch_array($query_lietke_danhmucnaiviet)) {
                        ?>
                            <ul>
                                <a href="index.php?quanly=danhmucbaiviet&id=<?php echo $row_lietke_danhmucbaiviet['tendanhmuc_baiviet'] ?>">
                                    <?php echo $row_lietke_danhmucbaiviet['tendanhmuc_baiviet'];?>
                                </a>
                            </ul>
                        <?php
                        }
                        ?>
                    </div>
                </li>
                <li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
                <li>
                    <?php 
                        if(isset($_SESSION['user_login'])){
                    ?>
                            <a href="index.php?quanly=dangxuat">Đăng xuất <?php echo $_SESSION['user_login']; ?></a>
                    <?php
                        }
                        else{
                    ?>
                            <a href="index.php?quanly=dangnhap">Đăng nhập </a>
                    <?php
                        }
                    ?>
                </li>
    </div>
<script src="asset/js/menu.js"></script>
