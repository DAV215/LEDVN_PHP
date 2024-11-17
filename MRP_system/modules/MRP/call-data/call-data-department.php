<?php 
    require_once 'data.php';
    $tbl_department = "tbl_department";
    if(isset($_POST['getall_department'])){
        $d = new department();
        $da = $d->getAll("tbl_department");
        echo json_encode($da);
    }
    if(isset($_POST['add_department'])){
        $d = new department();
        $data = array(
            'department' => $_POST['department'],
            'title' => $_POST['title']
        );
        // Correctly call the insert method with the table name and data
        $ins = $d->insert($tbl_department, $data);
    }
    if(isset($_POST['del'])){
        $d = new department();
        $id = $_POST['id'];
        $del = $d->delete($tbl_department, " `id` = $id");
    }
    if(isset($_POST['update'])){
        $d = new department();
        $id = $_POST['id'];
        $data = array(
            'department' => $_POST['department'],
            'title' => $_POST['title']
        );
        $del = $d->update($tbl_department,$data, " `id` = $id");
    }
?>