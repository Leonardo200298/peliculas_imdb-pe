<?php
require_once './librerias/smarty-4.2.1/libs/Smarty.class.php';

class peliculasView{
    function mostrarPeliculas($movies){
        $smarty = new Smarty();
   /*      echo "<ul>";
        foreach ($movies as $pelicula) {
            echo "<li>$pelicula->nombre</li> . <li>$pelicula->año .
            <li>$pelicula->produccion</li> . <li>$pelicula->recaudacion</li>
            </li>";
        }
    echo "</ul>"; */
    $smarty->assign('peliculas', "Todas las peliculas");
    $smarty->display('templates/table.tpl'); // muestro el template   

    }

}
