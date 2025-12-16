<?php
$controller = $_GET["controller"] ?? "";
$action = $_GET["action"] ?? "";

switch ($controller){
    case "tipoDocumento":
        require_once "controllers/TipoDocumentoController.php";
        $ctrl = new TipoDocumentoController();
        $ctrl->guardar();
        break;

    case "sexo":
        require_once 'controllers/SexoController.php';
        $ctrl = new SexoController();
        $ctrl->guardar();
        break;
    
    case "sangre":
        require_once 'controllers/SangreController.php';
        $ctrl = new SangreController();
        $ctrl->guardar();
        break;  
    default:
        echo "Bienvenido al sistema MVC";
        break;
}
?>