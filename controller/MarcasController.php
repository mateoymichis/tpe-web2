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

    public function getMarcas() {
        $marcas = $this->model->getMarcas();
        $this->view->displayMarcas($marcas);
    }

    public function getNombresMarcas() {
        $marcas = $this->model->getNombresMarcas();
        $this->view->displayNombresMarcas($marcas);
    }

    public function crearMarca() {
        $this->model->crearMarca($_POST['nombre'], $_POST['cuit']);
        header(("Location: " . BASE_URL . 'marcas'));
    }

    public function borrarMarca($id) {
        $this->model->borrarMarca($id);
        header("Location: " . BASE_URL . 'marcas');
    }

    public function formEditarMarca($id) {
        $marca = $this->model->getMarca($id);
        $this->view->editarMarca($marca, $id);
    }

    public function editarMarca($id) {
        $this->model->editarMarca($_POST['nombre'], $_POST['cuit'], $id);
        header(("Location: " . BASE_URL . 'marcas'));
    }
}
?>