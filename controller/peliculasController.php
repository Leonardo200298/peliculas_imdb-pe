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
    function peliculasConEseGenero($id){
        $peliculasDelGenero=$this->model->peliculasConEseGenero($id);
        $this->view->mostrarPeliculas($peliculasDelGenero);
    }
    function borrarPeli($id){
        $this->model->eliminarPelicula($id);
        header('Location: '. BASE_URL);
    }
    public function agregarPelicula(){
        $nombre = $_POST['nombre'];
        $fechaDeLanzamiento = $_POST['fecha-de-lanzamiento'];
        $costoDeProduccion = $_POST['costo-de-produccion'];
        $recaudacion = $_POST['recaudacion'];
        $genero = $_POST['genero'];
        $this->model->agregarPeliculaAlaDB($nombre,$fechaDeLanzamiento,$costoDeProduccion,$recaudacion,$genero);
      
        header('Location: '. BASE_URL);
    }
  
}