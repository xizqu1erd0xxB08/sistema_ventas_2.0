<?php
require_once "models/SexoModel.php";

class SexoController {
    public function guardar(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $sexo = $_POST["sexo"];

            $modelo = new SexoModel();
            $modelo->insertar($sexo);

            echo "Tipo de sexo registrado correctamente.";
        }
    }
}
?>