<?php



class peliculasController{
    private $model;
    private $view;
    function __construct()
    {
        $this->model = new peliculasModel();
        $this->view = new peliculasView();
    }
}