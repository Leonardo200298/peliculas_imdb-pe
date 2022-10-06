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
        $movies=$this->model->obtenerPeliculasModel();
        $this->view->mostrarPeliculas($movies);
    }
    function detallesDePeliculas($id){
        $moviesDetail=$this->model->detallesDePelicula($id);
        $this->view->mostrarDetalle($moviesDetail);
    }
  
}