<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once './controller/generosController.php';
require_once './controller/peliculasController.php';
require_once './controller/authController.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// leemos la accion que viene por parametro
$action = 'home'; // acción por defecto

if (!empty($_GET['action'])) { // si viene definida la reemplazamos
    $action = $_GET['action'];
}

/* Posicionate en la carpeta donde tengas el proyecto y tira el comando
chmod -R 777 templates_c
chmod -R 777 libs/smarty-4.2.1
chmod es para dar los permisos y con -R le decís que haga lo mismo con todo lo que tenga 
adentro, si no te anda tiraselo a todo el proyecto y fue */

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

session_start();
// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        $peliculasController = new peliculasController();
        $generoController = new generosController();
        $peliculasController->obtenerPeliculas();
        $generoController->obtenerGeneros();
        break;
    case 'detalles':
        $peliculasController = new peliculasController();
        $id = $params[1];
        $peliculasController->detallesDePeliculas($id);
        break;
    case 'peliculas':
        $peliculasController = new peliculasController();
        $id = $params[1];
        $peliculasController->peliculasConEseGenero($id);
        break;
    case 'login':
        $authController = new AuthController();
        $authController->mostrarForm();
        break;
    case 'validacion':
        $authController = new AuthController();
        $authController->validacionUser();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    case 'borrar':
        $peliculasController = new peliculasController();
        $id = $params[1];
        $peliculasController->borrarPeli($id);
        break;
    default:
        echo ('404 Page not found');
        break;
}
