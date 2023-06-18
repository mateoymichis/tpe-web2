<?php
require_once "./model/CelularesModel.php";
require_once "./view/CelularesView.php";

class CelularesController {
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new CelularesModel();
        $this->view = new CelularesView();
    }

    public function getCelulares() {
        $celulares = $this->model->getCelulares();
        $this->view->displayCelulares($celulares);
    }

    public function crearCelular() {
        $this->model->crearCelular($_POST['modelo'], $_POST['descripcion'], $_POST['imagen'], $_POST['marca_id']);
        header(("Location: " . BASE_URL));
    }

    public function borrarCelular($id) {
        $this->model->borrarCelular($id);
        header("Location: " . BASE_URL);
    }
}

?>