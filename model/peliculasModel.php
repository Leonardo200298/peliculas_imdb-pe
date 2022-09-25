<?php
class peliculasModel{
    private $db;

    function __construct()
    {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_peliculas_pe;charset=utf8', 'root', '');
    }
}