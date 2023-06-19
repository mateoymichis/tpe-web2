<?php

require_once 'libs/smarty/Smarty.class.php';

class MarcasView {

    public function displayMarcas($marcas) {
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Lista de marcas');
        $smarty->assign('marcas', $marcas);
 
        $smarty->display('templates/marcasView.tpl');
    }

    public function editarMarca($marca, $id) {
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Editar marca');
        $smarty->assign('marca', $marca);
        $smarty->assign('id', $id);
        $smarty->assign('base', BASE_URL);
        $smarty->display('templates/formEditMarca.tpl');
    }

}

?>