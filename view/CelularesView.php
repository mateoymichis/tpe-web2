<?php

require_once 'libs/smarty/Smarty.class.php';

class CelularesView {


    public function displayCelulares($celulares, $marcas) {
       $smarty = new Smarty();
       $smarty->assign('titulo', 'Lista de celulares');
       $smarty->assign('celulares', $celulares);
       $smarty->assign('marcas', $marcas);
       $smarty->display('templates/celularesView.tpl');
    }

    public function displaycelular($celular) {
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Detalle');
        $smarty->assign('celular', $celular);

        $smarty->display('templates/celularView.tpl');
    }

    public function editCelular($celular, $id, $marcas) {
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Editar celular');
        $smarty->assign('celular', $celular);
        $smarty->assign('id', $id);
        $smarty->assign('base', BASE_URL);
        $smarty->assign('marcas', $marcas);
        $smarty->display('templates/formEditCelular.tpl');
    }
}
?>