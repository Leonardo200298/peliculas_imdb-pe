<?php
require_once './model/generosModel.php';
require_once './view/generosView.php';
require_once './model/peliculasModel.php';

class generosController{
    private $model;
    private $view;
    private $movieModel;
    function __construct()
    {
        $this->model = new generosModel();
        $this->view = new generosView();
        $this->movieModel = new peliculasModel();

    }
    function obtenerGeneros(){
        $generos=$this-> model->obtenerGeneros();
        $this->view->mostrarGeneros($generos);
        
    }
    public function agregarGenero(){
        $nombreGenre = $_POST['nombre'];
        $this->model->crearGeneroDb($nombreGenre);
        header('Location: '. BASE_URL);
    }

    function BorrarGenero($id_genero){
        
        $this->view->error("No se puede eliminar el genero ya que contiene peliculas relacionadas a ese genero, eliminelas y vuelva a realizar la accion");
        
        
        $this->model->EliminarGenero($id_genero);
        header("location:" . BASE_URL);
        
    }
    public function editarGenero($id){
        $nombre = $_POST['nombre'];
        $genero = $_POST['genero'];

        $this->model->editarModel($nombre,$genero);
        header('Location: '. BASE_URL);
    }
  
}