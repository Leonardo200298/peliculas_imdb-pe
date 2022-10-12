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

/*         session_start();
 */  }
    function obtenerPeliculas(){
        $movies=$this->model->obtenerPeliculasModel();
        
        $this->view->mostrarPeliculas($movies);

    }
    function detallesDePeliculas($id){
        $moviesDetail=$this->model->detallesDePelicula($id);
        $this->view->mostrarDetalle($moviesDetail);
    }
    function peliculasConEseGenero($id){
        $peliculasDelGenero=$this->model->peliculasConEseGenero($id);
        $this->view->mostrarPeliculas($peliculasDelGenero);
    }
    function borrarPeli($id){
        $this->model->eliminarPelicula($id);
        header('Location: '. BASE_URL);
    }
  
}