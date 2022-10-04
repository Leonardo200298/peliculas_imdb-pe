<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once './controller/generosController.php';
require_once './controller/peliculasController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


$generoController=new generosController();
$peliculasController=new peliculasController();

// leemos la accion que viene por parametro
$action = 'home'; // acción por defecto

if (!empty($_GET['action'])) { // si viene definida la reemplazamos
    $action = $_GET['action'];
}


// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        $peliculasController->obtenerPeliculas();
        break;
    case 'generos':
        $generoController->obtenerGenero();
        break;
    default:
        echo('404 Page not found');
        break;
}



