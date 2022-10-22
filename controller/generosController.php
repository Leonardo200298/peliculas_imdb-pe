<?php
require_once './model/generosModel.php';
require_once './view/generosView.php';
require_once './helpers/auth.helper.php';

class generosController
{
    private $model;
    private $view;
    private $auth;
    function __construct()
    {
        $this->model = new generosModel();
        $this->view = new generosView();
        $this->auth = new AuthHelper();
    }
    function obtenerGeneros()
    {
        $generos = $this->model->obtenerGeneros();
        $this->view->mostrarGeneros($generos);
    }
    public function agregarGenero()
    {
        $this->auth->checkLoggedIn();
        $nombreGenre = $_POST['nombre'];
        $this->model->crearGeneroDb($nombreGenre);
        header('Location: ' . BASE_URL);
    }

    function BorrarGenero($id_genero)
    {
        $this->auth->checkLoggedIn();
        $pelis = $this->movieModel->peliculasConEseGenero($id_genero);
        if ($pelis = null) {
            $this->model->EliminarGenero($id_genero);
            header('Location: ' . BASE_URL);
        } else {
            $this->view->error("Este genero no se puede eliminar");
        }
    }
    public function editarGenero($id)
    {
        $this->auth->checkLoggedIn();
        $nombre = $_POST['nombre'];
        $genero = $_POST['genero'];

        $this->model->editarModel($nombre, $genero);
        header('Location: ' . BASE_URL);
    }
}
