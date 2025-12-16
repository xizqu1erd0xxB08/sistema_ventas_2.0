<?php
require_once "config/db.php";

class SangreModel {
    private $conn;

    public function __construct(){
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function insertar($sangre){
        $sql = "INSERT INTO sangre (tipo_sangre) VALUES ('$sangre')";
        return $this->conn->query($sql);
    }
}
?>