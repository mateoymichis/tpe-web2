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

    public function getDetalleCelular($id) {
        $celular = $this->model->getDetalleCelular($id);
        $this->view->displayCelular($celular);
    }

    public function getCelular($id) {
        $celular = $this->model->getCelular($id);
        return $celular;
    }

    public function crearCelular() {
        $this->model->crearCelular($_POST['modelo'], $_POST['descripcion'], $_POST['imagen'], $_POST['marca_id']);
        header(("Location: " . BASE_URL));
    }

    public function borrarCelular($id) {
        $this->model->borrarCelular($id);
        header("Location: " . BASE_URL);
    }

    public function formEditarCelular($id) {
        $celular = $this->model->getCelular($id);
        $this->view->editCelular($celular, $id);
    }

    public function editarCelular($id) {
        $this->model->editarCelular($_POST['modelo'], $_POST['descripcion'], $_POST['imagen'], $_POST['marca_id'], $id);
        header(("Location: " . BASE_URL));
    }
}

?>