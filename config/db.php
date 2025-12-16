<?php
    class Database {
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db = "sistema_ventas_2";

        public $conn;

        public function connect(){
            $this->conn = null;

            try {
                $this->conn = new mysqli(
                    $this->host,
                    $this->user,
                    $this->pass,
                    $this->db
                );
                if($this->conn->connect_error){
                    die("Error de conexión: " . $this->conn->connect_error);
                }
            } catch(Exception $e){
                echo "Error: " . $e->getMessage();
            }
            return $this->conn;
        }
    }
?>