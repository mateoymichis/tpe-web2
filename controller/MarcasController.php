<?php
require_once './model/MarcasModel.php';
require_once './view/MarcasView.php';

class MarcasController {
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new MarcasModel();
        $this->view = new MarcasView();
    }

    private function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['ID_USUARIO'])) {
            header('Location: ' . BASE_URL . 'login');
            die();
        }     
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
        $this->checkLoggedIn();
        $this->model->crearMarca($_POST['nombre'], $_POST['cuit']);
        header(("Location: " . BASE_URL . 'marcas'));
    }

    public function borrarMarca($id) {
        $this->checkLoggedIn();
        $this->model->borrarMarca($id);
        header("Location: " . BASE_URL . 'marcas');
    }

    public function formEditarMarca($id) {
        $this->checkLoggedIn();
        $marca = $this->model->getMarca($id);
        $this->view->editarMarca($marca, $id);
    }

    public function editarMarca($id) {
        $this->checkLoggedIn();
        $this->model->editarMarca($_POST['nombre'], $_POST['cuit'], $id);
        header(("Location: " . BASE_URL . 'marcas'));
    }
}
?>