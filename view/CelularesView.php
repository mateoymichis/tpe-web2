<?php

require_once 'libs/smarty/Smarty.class.php';

class CelularesView {


    public function displayCelulares($celulares) {
       $smarty = new Smarty();
       $smarty->assign('titulo', 'Lista de celulares');
       $smarty->assign('celulares', $celulares);

       $smarty->display('templates/celularesView.tpl');

    }
}
?>