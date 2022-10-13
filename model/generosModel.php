<?php
class generosModel{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_peliculas_pe;charset=utf8', 'root', '');
    }

    function obtenerGeneros(){
        $query = $this->db->prepare('SELECT * FROM generos');
        $query -> execute();
        $generos = $query->fetchAll(PDO::FETCH_OBJ);
        return $generos;
    }
}