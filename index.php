<?php
require_once "controller/CelularesController.php";
require_once "controller/MarcasController.php";


define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

if(!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode("/", $action);

switch ($params[0]) {
    case 'home':
        $controller = new CelularesController();
        $controller->getCelulares();
        break;
    case 'celulares':
        if (isset($params[1]) && !empty($params[1])) {
            switch ($params[1]) {
                case 'insertar':
                    $controller = new CelularesController();
                    $controller->crearCelular();
                    break;
                case 'borrar':
                    $controller = new CelularesController;
                    $controller->borrarCelular($params[2]);
                    break;
                case 'form-editar':
                    $controller = new CelularesController();
                    $controller->formEditarCelular($params[2]);
                    break;
                case 'editar':
                    $controller = new CelularesController();
                    $controller->editarCelular($params[2]);
                    break;
                case 'detalles':
                    $controller = new CelularesController();
                    $controller->getDetalleCelular($params[2]);
                    break;
                case 'marca':
                    $controller = new CelularesController();
                    $controller->getCelularesPorMarca($params[2]);
                    break;
            }
        } else {
            $controller = new CelularesController();
            $controller->getCelulares();
            break;
        }
        break;
    case 'marcas':
        if (isset($params[1]) && !empty($params[1])) {
            switch ($params[1]) {
            case 'insertar':
                $controller = new MarcasController();
                $controller->crearMarca();
                break;
            case 'borrar':
                $controller = new MarcasController();
                $controller->borrarMarca($params[2]);
                break;
            case 'form-editar':
                $controller = new MarcasController();
                $controller->formEditarMarca($params[2]);
                break;
            case 'editar':
                $controller = new MarcasController();
                $controller->editarMarca($params[2]);
                break;
                //solo para ver, luego poner en lista desplegable
            case 'all':
                $controller = new MarcasController();
                $controller->getNombresMarcas();
                break;

        }

        } else {
            $controller = new MarcasController();
            $controller->getMarcas();
            break;
        }
        break;
    case 'nosotros':
        echo "nosotros";
        break;
}
?>