<?php

require_once 'libs/smarty/Smarty.class.php';
require_once "./helper/AuthHelper.php";

class NosotrosView { 

    public function showNosotros() {
        $smarty = new Smarty();
        $authHelper = new AuthHelper();
        $user = $authHelper->getLoggedUserName();
        $smarty->assign('user', $user);
        $smarty->assign('titulo', 'Nosotros');
        $smarty->display('templates/nosotrosView.tpl');

    }
}

?>