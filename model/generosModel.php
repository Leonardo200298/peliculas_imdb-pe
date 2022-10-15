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

    //funciones para admin

    function crearGeneroDb($nombreGenre){
        $query = $this->db->prepare('INSERT INTO generos (genero) VALUES (?)');
        $query->execute([$nombreGenre]);
        
    }
    function eliminarGenero($id){
        $query = $this->db->prepare("DELETE FROM generos WHERE id_genero = ?");
        $query->execute([$id]);
    }
}