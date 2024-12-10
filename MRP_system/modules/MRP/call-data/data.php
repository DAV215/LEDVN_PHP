<?php 
session_start();
if($_SESSION['dangnhap'] != null){
    class DBDriver {
        private $__conn;
        private $host;
        private $username;
        private $password;
        private $database;
    
        public function __construct($host = "127.0.0.1", $username = "root", $password = "", $database = "web_ledvn_php") {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }
    
        private function connect() {
            if (!$this->__conn) {
                $this->__conn = new mysqli($this->host, $this->username, $this->password, $this->database, 3307);
    
                if ($this->__conn->connect_error) {
                    die("Connection failed: " . $this->__conn->connect_error);
                }
    
                // Set character set
                $this->__conn->set_charset("utf8");
            }
        }
    
        public function insert($table, $data) {
            $this->connect();
    
            $fields = implode(',', array_map(function($field) {
                return "`" . $field . "`"; // Wrap field names in backticks
            }, array_keys($data)));
            $placeholders = implode(',', array_fill(0, count($data), '?'));
    
            $stmt = $this->__conn->prepare("INSERT INTO $table ($fields) VALUES ($placeholders)");
            if ($stmt === false) {
                die("Prepare failed: " . $this->__conn->error);
            }
    
            $stmt->bind_param(str_repeat('s', count($data)), ...array_values($data)); // assuming all values are strings; you may need to adjust types
    
            return $stmt->execute();
        }
        public function update($table, $data, $where) {
            $this->connect();
        
            $set = [];
            $types = '';
            $values = [];
        
            foreach ($data as $key => $value) {
                $set[] = "$key = ?";
                $values[] = $value;
                $types .= 's'; // Assuming all values are strings; adjust as needed.
            }
        
            $setStr = implode(',', $set);
            $stmt = $this->__conn->prepare("UPDATE $table SET $setStr WHERE $where");
        
            if ($stmt === false) {
                die("Prepare failed: " . $this->__conn->error);
            }
        
            // Bind the parameters.
            $stmt->bind_param($types, ...$values);
        
            return $stmt->execute();
        }
    
        public function delete($table, $where) {
            $this->connect();
            $stmt = $this->__conn->prepare("DELETE FROM $table WHERE $where");
    
            if ($stmt === false) {
                die("Prepare failed: " . $this->__conn->error);
            }
    
            return $stmt->execute();
        }
    
        public function getAll($table) {
            $this->connect();
            $result = $this->__conn->query("SELECT * FROM $table");
    
            return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
        }
    
        public function getAllWhere($table, $sql_GET, $sql_WHERE) {
            $this->connect();
            $sql = "SELECT $sql_GET FROM $table WHERE $sql_WHERE";
            $result = $this->__conn->query($sql);
    
            return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
        }
        public function get_Unique_col($table, $sql_GET, $sql_WHERE) {
            $this->connect();
            $sql = "SELECT DISTINCT $sql_GET FROM $table WHERE $sql_WHERE";
            $result = $this->__conn->query($sql);
    
            return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
        }
        public function updateSet($table, $set, $where) {
            $this->connect();
            $stmt = $this->__conn->prepare("UPDATE $table SET $set WHERE $where");
    
            if ($stmt === false) {
                die("Prepare failed: " . $this->__conn->error);
            }
    
            return $stmt->execute();
        }
    
        public function __destruct() {
            if ($this->__conn) {
                $this->__conn->close();
            }
        }
        public function uploadfile($dir, $file){
            if (isset($file) ) {
                $file_name = uniqid() . "-" . basename($file['name']);
                $target_file = $dir . $file_name;
                if (move_uploaded_file($file['tmp_name'], $target_file)) {
                    return $file_name;
                } else {
                    return  "Failed to move uploaded file.";
                }
            }else{
                return "No file upload !";
            }
        }
    }
    


    class post_data2 extends DBDriver {
        private $tbl;
        public function __construct() {
            parent::__construct();
            $this->tbl = "tbl_baiviet";
            
        }
        public function getDataAtPage() {
            return json_encode(parent::getAll($this->tbl));
        }
        public function get_thumbnail($where){
            return  parent::getAllWhere($this->tbl, '`id_baiviet`, `danhmucbaiviet`, `tenbaiviet`, `hinhanh`, `tomtat`,  `ngayviet`', $where);
        }
        public function getdanhmuc(){
            return parent::get_Unique_col('tbl_danhmucbaiviet', ' `id_danhmucbaiviet`, `tendanhmuc_baiviet` ', 1);
        }
    }
    class department extends DBDriver {
        private $tbl;
        public function __construct() {
            parent::__construct();
            $this->tbl = "tbl_department";
            
        }

    }
    class permission extends DBDriver {
        private $tbl;
        public function __construct() {
            parent::__construct();
            $this->tbl = "tbl_permission";
            
        }

    }
    class employee extends DBDriver {
        private $tbl;
        public function __construct() {
            parent::__construct();
            $this->tbl = "tbl_employee";
            
        }
        public function getallemployee() {
                $e = new employee();
                $p = new department();           
                $e_data  = $e->getAll( $this->tbl);
                foreach($e_data as &$row){
                    $department = $p->getAllWhere("tbl_department", " * ", " `id` = " . $row['id_department'])[0];
                    $row['department'] = $department['department'];
                    $row['title'] = $department['title'];
                    unset($row['password']);
                }
                
                return  $e_data;
        }
        public function checkrule($rule, $id_user){
            $rule_encode = md5($rule);
            $ruleOfuser = $this->getAllWhere("tbl_employee", '`rule`', '`id` = '. $id_user);
            $rule_keys = array_keys(json_decode($ruleOfuser[0]['rule'], true));
            if(in_array($rule_encode, $rule_keys)){
                return 1;
            }
            return 0;
        }
    }
    class ads_data extends DBDriver {
        private $tbl;
        public function __construct() {
            parent::__construct();
            $this->tbl = "tbl_header";
            
        }
        public function getdata() {
            return json_encode(parent::getAll($this->tbl));
        }
    }

    class live_search extends DBDriver{
        private $tbl;
        public $conn_to_tbl;
        public function __construct() {
            parent::__construct();
            $this->tbl = "tbl_sanpham";
            
        }
        public function getdata() {
            $result = $this->getAll($this->tbl); // Truy cập đúng thuộc tính conn_to_tbl
            return $result;
        }

        public function getdataAsJson() {
            $data = $this->getdata();
            return json_encode($data);
        }
        public function production_search($content) {
            $condition ="`danhmucsanpham` LIKE '%$content%'
                                OR `tensp` LIKE '%$content%'
                                OR `kichthuoc` LIKE '%$content%'
                                OR `masp` LIKE '%$content%'
                                OR `giasp` LIKE '%$content%'
                                OR `tomtat` LIKE '%$content%';";
            $result = parent::getAllWhere($this->tbl, "*", $condition);
            return $result;
        }
        public function returnJSON($input) {
            return json_encode($input);
        }
    }
}else{
    echo $_SESSION['dangnhap'];
}

?>