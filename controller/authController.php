<?php

require_once './model/usuario.model.php';
require_once './view/authView.php';
require_once './helpers/auth.helper.php';

class AuthController{
    private $view;
    private $model;
    private $auth;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->view = new AuthView();
        $this->auth = new AuthHelper();
    }
    public function mostrarForm(){
        $this->view->mostrarForm();
    }
    public function validacionUser(){
        

        $email = $_POST['email'];
        $contrasenia = $_POST['password'];

        $usuario = $this->model->conseguirUsuarioPorMail($email);
        
        /* $this->view->paraELHeader($_SESSION['USER_EMAIL']); */
        if ($usuario && password_verify($contrasenia, $usuario->contrasenia)){
            session_start();
            $_SESSION['USER_ID'] = $usuario->id;
            $_SESSION['USER_EMAIL'] = $usuario->mail;
            $_SESSION['IS_LOGGED'] = true;
            header("Location: " . BASE_URL);
        }else{

            $this->view->mostrarForm("El usuario o la contraseña no existe");
        }
    }
    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}