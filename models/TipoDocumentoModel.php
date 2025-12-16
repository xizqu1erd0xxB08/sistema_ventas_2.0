<?php
require_once "config/db.php";

class TipoDocumentoModel {
    private $conn;

    public function __construct(){
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function insertar($tipoDocumento){
        $sql = "INSERT INTO tipodocumento (tipo_documento) VALUES ('$tipoDocumento')";
        return $this->conn->query($sql);
    }
}
?>