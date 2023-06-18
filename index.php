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

        if($partesURL[0] == "celulares") {
            $controller = new CelularesController();
            $controller->getCelulares();
        } else if($partesURL[0] == "insertar") {
            $controller = new CelularesController();
            $controller->crearCelular();
        } else if($partesURL[0] == "borrar") {
            $controller = new CelularesController;
            $controller->borrarCelular($partesURL[1]);
        }
    }
}

?>