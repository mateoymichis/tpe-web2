<?php

require_once 'libs/smarty/Smarty.class.php';

class MarcasView {

    public function displayMarcas($marcas) {
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Lista de marcas');
        $smarty->assign('marcas', $marcas);
 
        $smarty->display('templates/marcasView.tpl');
     }

}

?>