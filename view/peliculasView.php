<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class peliculasView{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
        
    }

    function mostrarPeliculas($movies){
   /*      echo "<ul>";
        foreach ($movies as $pelicula) {
            echo "<li>$pelicula->nombre</li> . <li>$pelicula->año .
            <li>$pelicula->produccion</li> . <li>$pelicula->recaudacion</li>
            </li>";
        }
    echo "</ul>"; */
    $this->smarty->assign('peliculas', "Todas las peliculas");
    $this->smarty->display('templates/table.tpl'); // muestro el template   

    }

}
