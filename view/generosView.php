<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class generosView{
    private $smarty;

    function __construct()
    {
        $this->smarty=new Smarty();
    }

    function mostrarGeneros($generos){
        /* echo "<ul>";
            foreach ($generos as $genero) {
                echo "<li>$genero->nombre</li>";
            }
        echo "</ul>"; */
        $this->smarty->assign('generos',"Todos los generos");
        $this->smarty->assign('genreArrays', $generos);
        $this->smarty->display('templates/genreList.tpl');
    }
    function mostrarPeliculasDelGenero($peliculasDelGenero){
        $this->smarty->assign('pelicula',"peliculas con este genero");
        $this->smarty->assign('generosDePeliculas', $peliculasDelGenero);
        $this->smarty->display('templates/peliculasConEsteGenre.tpl');
    }
}