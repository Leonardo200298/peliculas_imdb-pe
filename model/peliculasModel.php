<?php
class peliculasModel{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_peliculas_pe;charset=utf8', 'root', '');
    }
    function obtenerPeliculas(){
        $query = $this->db->prepare('SELECT * FROM peliculas');
        $query -> execute();
        $peliculas = $query->fetchAll(PDO::FETCH_OBJ);
        return $peliculas;
    }
}