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
            return json_encode($data, JSON_PRETTY_PRINT);
        }
    }
    class live_search extends overview_db{
        private $tbl;
        public $conn_to_tbl;
        public function __construct() {
            parent::__construct();
            $this->tbl = "tbl_sanpham";

            $this->conn_to_tbl = $this->db->from($this->tbl);
        }
        public function getdata() {
            $result = $this->conn_to_tbl->select()->all(); // Truy cập đúng thuộc tính conn_to_tbl
            return $result;
        }

        public function getdataAsJson() {
            $data = $this->getdata();
            return json_encode($data, JSON_PRETTY_PRINT);
        }
        public function production_search($content) {
            $result = $this->db->from('tbl_sanpham')
                ->where(function($query) use ($content) {
                    $query->where('danhmucsanpham')->like('%' . $content . '%')
                        ->orWhere('tensp')->like('%' . $content . '%')
                        ->orWhere('kichthuoc')->like('%' . $content . '%')
                        ->orWhere('masp')->like('%' . $content . '%')
                        ->orWhere('giasp')->like('%' . $content . '%')
                        ->orWhere('tomtat')->like('%' . $content . '%');
                })
                ->select()
                ->all();
            return $result;
        }
        public function returnJSON($input) {
            return json_encode($input, JSON_PRETTY_PRINT);
        }
    }
?>