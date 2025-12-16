<?php
require_once "models/TipoDocumentoModel.php";

class TipoDocumentoController {
    public function guardar(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $tipoDocumento = $_POST["tipo_documento"];

            $modelo = new TipoDocumentoModel();
            $modelo->insertar($tipoDocumento);

            echo "Tipo de documento registrado correctamente.";
        }
    }
}
?>