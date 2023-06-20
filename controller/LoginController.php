<?php
    include_once "./view/LoginView.php";
    include_once "./model/UsuariosModel.php";

    class LoginController {
    
        private $view;
        private $model;
    
        public function __construct() {
            $this->view = new LoginView();
            $this->model = new UsuariosModel();
        }
    
        public function showLogin() {
            $this->view->showLogin();
        }

        public function verificarUsuario() {
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            $usuario = $this->model->getByEmail($email);
    
            // encontró un user con el username que mandó, y tiene la misma contraseña
            if (!empty($usuario) && password_verify($password, $usuario->password)) {
                session_start();
                $_SESSION['ID_USUARIO'] = $usuario->id_usuario;
                $_SESSION['EMAIL'] = $usuario->email;
                //revisar
                header(("Location: " . BASE_URL));
            } else {
                $this->view->showLogin("Login incorrecto");
            }
        }

        public function logout() {
            session_start();
            session_destroy();
            header('Location: ' . BASE_URL . 'login');
        }
    
    
    }    
?>