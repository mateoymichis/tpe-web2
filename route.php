<?php
    if(!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home';
    }

    $params = explode('/', $action);

    switch ($params[0]) {
        case 'home':
            home();
            break;
        case 'celulares':
            celulares($params[1]);
            break;
        default:
            echo('404 Page not found');
            break;
    }

    function home () {
        echo "Estas en home";
    }

    function celulares ($modelo) {
        echo "Celular ". $modelo;
    }
?>