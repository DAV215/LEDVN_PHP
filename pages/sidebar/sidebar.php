<?php
    // Assuming $mysqli is already defined and connected
    $sql_lietke__sidebar = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke__sidebar = mysqli_query($mysqli, $sql_lietke__sidebar);
?>
<div class="sidebar">
    <div class="sidebar-name">
        <h1>Danh mục sản phẩm </h1>
    </div>
    <div class="sidebar-content">
        <ul> <!-- Added <ul> tag to wrap list items -->
            <?php
            while ($row_lietke__sidebar = mysqli_fetch_array($query_lietke__sidebar)) {
            ?>
                <li>
                    <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_lietke__sidebar['tendanhmuc'] ?>">
                        <?php echo $row_lietke__sidebar['tendanhmuc'] ?>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>
