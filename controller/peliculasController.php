<?php
require_once './model/peliculasModel.php';
require_once './view/peliculasView.php';
require_once './helpers/auth.helper.php';

class peliculasController{
    private $model;
    private $view;
    private $auth;

    function __construct()
    {
        $this->model = new peliculasModel();
        $this->view = new peliculasView();
        $this->auth = new AuthHelper();
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
        $this->auth->checkLoggedIn();
        $this->model->eliminarPelicula($id);
        header('Location: '. BASE_URL);
    }
    public function agregarPelicula(){
        $this->auth->checkLoggedIn();
        $nombre = $_POST['nombre'];
        $fechaDeLanzamiento = $_POST['fecha-de-lanzamiento'];
        $costoDeProduccion = $_POST['costo-de-produccion'];
        $recaudacion = $_POST['recaudacion'];
        $genero = $_POST['genero'];
        $this->model->agregarPeliculaAlaDB($nombre,$fechaDeLanzamiento,$costoDeProduccion,$recaudacion,$genero);
      
        header('Location: '. BASE_URL);
    }
    public function editar(){
        $this->auth->checkLoggedIn();
        $nombre = $_POST['nombre'];
        $fechaDeLanzamiento = $_POST['fecha-de-lanzamiento'];
        $costoDeProduccion = $_POST['costo-de-produccion'];
        $recaudacion = $_POST['recaudacion'];
        $id_peliculas = $_POST['pelicula'];
        $this->model->editarPelicula($nombre,$fechaDeLanzamiento,$costoDeProduccion,$recaudacion,$id_peliculas);
        header('Location: '. BASE_URL);

    }
  
}