<?php

require_once('libs/smarty/Smarty.class.php');

class LoginView {
    public function showLogin($error = null) {
        $smarty = new Smarty();
        $smarty->assign('titulo', 'Iniciar Sesión');
        $smarty->assign('error', $error);
        $smarty->display('templates/login.tpl');
    }

}
?>