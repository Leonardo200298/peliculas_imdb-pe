<?php
require_once './model/peliculasModel.php';
require_once './view/peliculasView.php';

class peliculasController{
    private $model;
    private $view;
    function __construct()
    {
        $this->model = new peliculasModel();
        $this->view = new peliculasView();
    }
    function obtenerPeliculas(){
        $movies=$this->model->obtenerPeliculas();
        $this->view->mostrarPeliculas($movies);
    }
  
}