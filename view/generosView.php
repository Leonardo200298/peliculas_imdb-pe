<?php

class generosView{
    function mostrarGeneros($generos){
        echo "<ul>";
            foreach ($generos as $genero) {
                echo "<li>$genero->nombre</li>";
            }
        echo "</ul>";
    }
}