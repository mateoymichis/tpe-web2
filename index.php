<?php
require_once "controller/CelularesController.php";

$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

if($action == '') {
    $controller = new CelularesController();
    $controller->getCelulares();
} else {
    if(isset($action)) {
        $partesURL = explode("/", $action);

        if($partesURL[0] == "celulares" && isset($partesURL[1])) {
            $controller = new CelularesController();
            $controller->getCelular($partesURL[1]);
        } else if($partesURL[0] == "celulares"){
            $controller = new CelularesController();
            $controller->getCelulares();
        } else if($partesURL[0] == "insertar") {
            $controller = new CelularesController();
            $controller->crearCelular();
        } else if($partesURL[0] == "borrar") {
            $controller = new CelularesController;
            $controller->borrarCelular($partesURL[1]);
        } else if ($partesURL[0] == "editar") {
            $controller = new CelularesController();
            $controller->editarCelular($partesURL[1]);
        } else if ($partesURL[0] == "form-editar") {
            $controller = new CelularesController();
            $controller->formEditarCelular($partesURL[1]);
        }

        
    }
}

?>