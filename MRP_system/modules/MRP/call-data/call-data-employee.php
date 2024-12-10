<?php 
    require_once 'data.php';
    $tbl = "tbl_employee";
    $id_user_now = $_SESSION['user'][0]['id'];
    if(isset($_POST['getall_employee'])){
        $d = new employee();
        if($d->checkrule("employee view", $id_user_now)){
            $da = $d->getallemployee($tbl);
            echo json_encode($da);
        }else{
            echo "Dont have permission !";
        }

    }
    if(isset($_POST['add_department'])){
        $d = new department();
        $data = array(
            'department' => $_POST['department'],
            'title' => $_POST['title']
        );
        // Correctly call the insert method with the table name and data
        $ins = $d->insert($tbl, $data);
    }
    if(isset($_POST['del'])){
        $d = new employee();
        if($d->checkrule("employee del", $id_user_now)){
            $id = $_POST['id'];
            $del = $d->delete($tbl, " `id` = $id");
        }else{
            echo "Dont have permission !";
        }
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

    $avt_dir = "../employee/avt/";
    if(isset($_POST['add_empl'])){
        $d = new employee();
        $avt = $d->uploadfile($avt_dir,  $_FILES['avt_file']);
        $data = array(
            'first_name' => $_POST['first_name'],
            'name' => $_POST['name'],
            'phone_number' => $_POST['phone'],
            'address' => $_POST['address'],
            'id_department' => $_POST['id_department'],
            'start_day' => $_POST['start_day'],
            'birth_day' => $_POST['birth_day'],
            'username' => $_POST['username'],
            'password' => md5($_POST['password']), // securely hash the password
            'gmail' => $_POST['mail'],
            'avt_dir' => "employee/avt/$avt"
        );
        $d->insert($tbl, $data);
        echo json_encode($data);
    }
    if (isset($_POST['mod_empl'])) {
        $d = new employee();
        $id = intval($_POST['id_empl']); // Cast to int to prevent SQL injection
        $data = array(
            'first_name' => $_POST['first_name'],
            'name' => $_POST['name'],
            'phone_number' => $_POST['phone'],
            'address' => $_POST['address'],
            'id_department' => $_POST['id_department'],
            'start_day' => $_POST['start_day'],
            'birth_day' => $_POST['birth_day'],
            'username' => $_POST['username'],
            'gmail' => $_POST['mail']
        );
    
        // Check if a new avatar file is provided
        if (!empty($_FILES['mod_avt_file']['name'])) {
            $avt = $d->uploadfile($avt_dir, $_FILES['mod_avt_file']);
            if ($avt) {
                $data['avt_dir'] = "employee/avt/$avt";
            }
        }
    
        // Update the employee data
        $d->update($tbl, $data, " `id` = $id");
        echo json_encode($data);
    }
    
?>