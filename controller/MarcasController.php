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

    public function crearMarca() {
        $this->model->crearMarca($_POST['nombre'], $_POST['cuit']);
        header(("Location: " . BASE_URL));
    }
}
?>