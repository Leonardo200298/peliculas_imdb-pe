<?php

require_once './model/usuario.model.php';
require_once './view/authView.php';

class AuthController{
    private $view;
    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->view = new AuthView();
    }
    public function mostrarForm(){
        $this->view->mostrarForm();
    }
    public function validacionUser(){
        $email = $_POST['email'];
        $contrasenia = $_POST['password'];

        $usuario = $this->model->conseguirUsuarioPorMail($email);

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
}