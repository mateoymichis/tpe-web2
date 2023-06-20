<?php

require_once "./libs/smarty/Smarty.class.php";
require_once "./helper/AuthHelper.php";

class CelularesView {

    private $smarty;
    private $authHelper;

    function __construct()
    {
        $this->smarty = new Smarty();
        $this->authHelper = new AuthHelper();
        $user = $this->authHelper->getLoggedUserName();
        $this->smarty->assign('user', $user);
    }


    public function displayCelulares($celulares, $marcas) {
       $this->smarty->assign('titulo', 'Lista de celulares');
       $this->smarty->assign('celulares', $celulares);
       $this->smarty->assign('marcas', $marcas);
       $this->smarty->display('templates/celularesView.tpl');
    }

    public function displaycelular($celular) {
        $this->smarty->assign('titulo', 'Detalle');
        $this->smarty->assign('celular', $celular);

        $this->smarty->display('templates/celularView.tpl');
    }

    public function editCelular($celular, $id, $marcas) {
        $this->smarty->assign('titulo', 'Editar celular');
        $this->smarty->assign('celular', $celular);
        $this->smarty->assign('id', $id);
        $this->smarty->assign('base', BASE_URL);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display('templates/formEditCelular.tpl');
    }
}
?>