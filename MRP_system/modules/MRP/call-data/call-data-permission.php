<?php 
    require_once 'data.php';
    $tbl_permission = "tbl_permission";
    if(isset($_POST['getall_permission'])){
        $p = new permission();
        echo json_encode($p->getAllWhere($tbl_permission, "permission", " 1 "));
    }
    if(isset($_POST['add_per'])){
        $p = new permission();
        $permission = $_POST['permission'];
        
        $data = array(
            'permission' => $permission,
            'view' => md5("$permission view"),
            'create' => md5("$permission create"),
            'modify' => md5("$permission modify"),
            'del' => md5("$permission del")
        );
        $p->insert($tbl_permission,$data);
        echo json_encode($data);
    }
    if(isset($_POST['del'])){
        $d = new employee();
        $id = $_POST['id'];
        $del = $d->delete($tbl, " `id` = $id");
    }
    if(isset($_POST['update'])){
        $d = new employee();
        $id = $_POST['id'];
        $data = array(
            'department' => $_POST['department'],
            'title' => $_POST['title']
        );
        $del = $d->update($tbl,$data, " `id` = $id");
    }
    if(isset($_POST['modify_rule_for_empl'])){
        $id_user = $_POST['id_user'];
        unset($_POST['modify_rule_for_empl']);
        unset($_POST['id_user']);
        if(isset($_POST['DataTables_Table_1_length'])){
            unset($_POST['DataTables_Table_1_length']);
        }
        $data = array(
            'rule' => json_encode($_POST)
        );
        $d = new employee();
        $rule = $d->update("tbl_employee", $data, " `id` = $id_user");
        if($rule){
            echo "done update permission";
        }else{
            echo "fail";
        }
    }
    if(isset($_POST['get_permission_user'])){
        $id_user = $_POST['id_user'];
        $d = new employee();
        $del =  ($d->getAllWhere("tbl_employee"," `rule` ", " `id` = $id_user")[0]['rule']);
        echo $del;
    }
    
?>