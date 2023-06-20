<?php

require_once "./libs/smarty/Smarty.class.php";
require_once "./helper/AuthHelper.php";

class MarcasView {

    private $smarty;
    private $authHelper;

    function __construct()
    {
        $this->smarty = new Smarty();
        $this->authHelper = new AuthHelper();
        $user = $this->authHelper->getLoggedUserName();
        $this->smarty->assign('user', $user);
    }

    public function displayMarcas($marcas) {
        $this->smarty->assign('titulo', 'Lista de marcas');
        $this->smarty->assign('marcas', $marcas);
 
        $this->smarty->display('templates/marcasView.tpl');
    }

    public function displayNombresMarcas($marcas) {
        $this->smarty->assign('titulo', 'Marcas');
        $this->smarty->assign('marcas', $marcas);
 
        $this->smarty->display('templates/marcasNombres.tpl');
    }

    public function editarMarca($marca, $id) {
        $this->smarty->assign('titulo', 'Editar marca');
        $this->smarty->assign('marca', $marca);
        $this->smarty->assign('id', $id);
        $this->smarty->assign('base', BASE_URL);
        $this->smarty->display('templates/formEditMarca.tpl');
    }

}

?>