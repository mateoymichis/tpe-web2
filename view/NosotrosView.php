<?php

require_once 'libs/smarty/Smarty.class.php';

class NosotrosView { 

    public function showNosotros() {
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Nosotros');
        $smarty->display('templates/nosotrosView.tpl');
    }
}

?>