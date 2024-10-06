<?php 
    require_once 'ads_data.php';
    if(isset($_POST['live_search'])){
        $key = $_POST['key'];
        $fct = new live_search();
        echo $fct->returnJSON($fct->production_search($key));
    }
?>