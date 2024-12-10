<?php 
    require_once 'ads_data.php';
    if(isset($_POST['getall_banner'])){
        $ads = new ads_data();
         echo $ads->getdataAsJson();
    }
?>