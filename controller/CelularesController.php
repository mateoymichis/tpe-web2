<?php
require_once "./model/CelularesModel.php";
require_once "./view/CelularesView.php";
require_once "./helper/AuthHelper.php";

class CelularesController {
    private $model;
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->model = new CelularesModel();
        $this->view = new CelularesView();
        $this->authHelper = new AuthHelper();
    }
    
    public function getCelulares() {
        $celulares = $this->model->getCelulares();
        require_once './controller/MarcasController.php';
        $marcasController = new MarcasController();
        $marcas = $marcasController->getNombresMarcas();
        $this->view->displayCelulares($celulares, $marcas);
    }

    public function getCelularesPorMarca($marca) {
        $celulares = $this->model->getCelularesPorMarca($marca);
        require_once './controller/MarcasController.php';
        $marcasController = new MarcasController();
        $marcas = $marcasController->getNombresMarcas();
        $this->view->displayCelulares($celulares, $marcas);
        
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
        $this->authHelper->checkLoggedIn();
        $this->model->crearCelular($_POST['modelo'], $_POST['descripcion'], $_POST['imagen'], $_POST['marca_id']);
        header(("Location: " . BASE_URL));
    }

    public function borrarCelular($id) {
        $this->authHelper->checkLoggedIn();
        $this->model->borrarCelular($id);
        header("Location: " . BASE_URL);
    }

    public function formEditarCelular($id) {
        $this->authHelper->checkLoggedIn();
        $celular = $this->model->getCelular($id);
        require_once './controller/MarcasController.php';
        $marcasController = new MarcasController();
        $marcas = $marcasController->getNombresMarcas();
        $this->view->editCelular($celular, $id, $marcas);
    }

    public function editarCelular($id) {
        $this->authHelper->checkLoggedIn();
        $this->model->editarCelular($_POST['modelo'], $_POST['descripcion'], $_POST['imagen'], $_POST['marca_id'], $id);
        header(("Location: " . BASE_URL));
    }
}

?>