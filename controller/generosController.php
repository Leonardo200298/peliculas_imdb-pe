<?php



class peliculasController{
    private $model;
    private $view;
    function __construct()
    {
        $this->model = new generosModel();
        $this->view = new generosView();
    }
}