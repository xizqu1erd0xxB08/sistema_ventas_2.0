<?php
require_once "models/SangreModel.php";

class SangreController {
    public function guardar(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $sangre = $_POST["sangre"];

            $modelo = new SangreModel();
            $modelo->insertar($sangre);

            echo "Tipo de sangre registrado correctamente.";
        }
    }
}
?>