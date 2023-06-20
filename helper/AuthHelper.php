<?php

class AuthHelper {

    public function __construct() {}

    public function login($usuario) {
        session_start();
        $_SESSION['ID_USUARIO'] = $usuario->id_usuario;
        $_SESSION['EMAIL'] = $usuario->email;
    }

    public function logout() {
        session_start();
        session_destroy();
    }

    public function checkLoggedIn() {
        if (!isset($_SESSION['ID_USUARIO'])) {
            header('Location: ' . BASE_URL . 'login');
            die();
        }       
    }

    public function getLoggedUserName() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        if(isset($_SESSION['EMAIL']))
            return $_SESSION['EMAIL'];
    }



}

?>