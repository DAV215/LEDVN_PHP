<?php 
require_once __DIR__ .'../../../vendor/autoload.php';
use Opis\Database\Database;
use Opis\Database\Connection;
    class overview_db{
        public $db;
        public function __construct(){
            $connection = new Connection(
                'mysql:host=127.0.0.1:3307;dbname=web_ledvn_php',
                'root',
                ''
            );
            $this -> db = new Database($connection);
        }
        
    }
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
    
            $fields = implode(',', array_keys($data));
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
                $types .= 's'; // assuming all values are strings; adjust as needed
            }
    
            $setStr = implode(',', $set);
            $stmt = $this->__conn->prepare("UPDATE $table SET $setStr WHERE $where");
    
            if ($stmt === false) {
                die("Prepare failed: " . $this->__conn->error);
            }
    
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
    }
    
    class ads_data extends overview_db{
        private $tbl;
        public $conn_to_tbl;
        public function __construct() {
            parent::__construct();
            $this->tbl = "tbl_banner";

            $this->conn_to_tbl = $this->db->from($this->tbl);
        }
        public function getdata() {
            $result = $this->conn_to_tbl->select()->all(); // Truy cập đúng thuộc tính conn_to_tbl
            return $result;
        }

        public function getdataAsJson() {
            $data = $this->getdata();
            return json_encode($data);
        }
    }
    class post_data extends overview_db {
        private $tbl;
        private $conn_to_tbl;
    
        public function __construct() {
            parent::__construct();
            $this->tbl = "tbl_baiviet";
            $this->conn_to_tbl = $this->db->from($this->tbl);
        }
    
        public function getData() {
            $result = $this->conn_to_tbl->select()->all(); // Access the correct property
            return $result;
        }
    
        public function getDataAsJson() {
            $data = $this->getData();
            return json_encode($data, JSON_PRETTY_PRINT);
        }
    
        public function getDataAtPage($page) {
            $limit = 5; // Number of items per page
            $offset = ($page - 1) * $limit;

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
    class ads_data2 extends DBDriver {
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
?>