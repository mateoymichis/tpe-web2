<?php
require_once './model/MarcasModel.php';
require_once './view/MarcasView.php';
require_once "./helper/AuthHelper.php";

class MarcasController {
    private $model;
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->model = new MarcasModel();
        $this->view = new MarcasView();
        $this->authHelper = new AuthHelper();
    }

    public function getMarcas() {
        $marcas = $this->model->getMarcas();
        $this->view->displayMarcas($marcas);
    }

    public function getNombresMarcas() {
        $marcas = $this->model->getNombresMarcas();
        return $marcas;
    }

    public function crearMarca() {
        $this->authHelper->checkLoggedIn();
        $this->model->crearMarca($_POST['nombre'], $_POST['cuit']);
        header(("Location: " . BASE_URL . 'marcas'));
    }

    public function borrarMarca($id) {
        $this->authHelper->checkLoggedIn();
        $this->model->borrarMarca($id);
        header("Location: " . BASE_URL . 'marcas');
    }

    public function formEditarMarca($id) {
        $this->authHelper->checkLoggedIn();
        $marca = $this->model->getMarca($id);
        $this->view->editarMarca($marca, $id);
    }

    public function editarMarca($id) {
        $this->authHelper->checkLoggedIn();
        $this->model->editarMarca($_POST['nombre'], $_POST['cuit'], $id);
        header(("Location: " . BASE_URL . 'marcas'));
    }
}
?>