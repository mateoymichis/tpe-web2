<?php
    include_once "./view/LoginView.php";
    include_once "./model/UsuariosModel.php";
    include_once "./helper/AuthHelper.php";

    class LoginController {
    
        private $view;
        private $model;
        private $authHelper;
    
        public function __construct() {
            $this->view = new LoginView();
            $this->model = new UsuariosModel();
            $this->authHelper = new AuthHelper();
        }
    
        public function showLogin() {
            $this->view->showLogin();
        }

        public function verificarUsuario() {
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            $usuario = $this->model->getByEmail($email);
    
            if (!empty($usuario) && password_verify($password, $usuario->password)) {
                $this->authHelper->login($usuario);
                header(("Location: " . BASE_URL));
            } else {
                $this->view->showLogin("Usuario o contraseña incorrecto");
            }
        }

        public function logout() {
            $this->authHelper->logout();
            header('Location: ' . BASE_URL);
        }
    
    
    }    
?>