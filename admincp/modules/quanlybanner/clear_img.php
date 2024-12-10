<?php 
    $path_upload_imgs = 'modules/quanlybanner/uploads';
    $file_img = scandir($path_upload_imgs);
    $query = "SELECT * FROM tbl_banner";
    $sql_lietke_sp = mysqli_query($mysqli, $query);
    $img_arr = [];
    while($row = mysqli_fetch_array($sql_lietke_sp)){
        $img_arr[] = $row['link_img'];
    }
    if(count($file_img) != (count($img_arr)+2)){
        foreach($file_img as $file){
            if(!in_array($file, $img_arr) && $file != '.'&& $file != '..'){
                unlink($path_upload_imgs."/".$file);
            }
        }
    }
?>