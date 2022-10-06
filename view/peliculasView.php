<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class peliculasView{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function mostrarPeliculas($movies)
    {
        
        $this->smarty->assign('peliculas', "Todas las peliculas");
        $this->smarty->assign('movieArrays', $movies);
        $this->smarty->display('templates/movieList.tpl'); // muestro el template   

    }
    function mostrarDetalle($moviesDetail){
        $this->smarty->assign('detalles',"Detalles de peliculas");
        $this->smarty->assign('details',$moviesDetail);
        $this->smarty->display('templates/detailMovies.tpl'); // muestro el template   
    }
}
