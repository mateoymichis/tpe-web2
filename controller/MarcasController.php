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
        $celulares = $this->model->getMarcas();
        $this->view->displayMarcas($celulares);
    }
}
?>