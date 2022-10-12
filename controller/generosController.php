<?php
require_once './model/generosModel.php';
require_once './view/generosView.php';

class generosController{
    private $model;
    private $view;
    function __construct()
    {
        $this->model = new generosModel();
        $this->view = new generosView();
       /*  session_start(); */

    }
    function obtenerGeneros(){
        $generos=$this-> model->obtenerGeneros();
        $this->view->mostrarGeneros($generos);
    }

  
}