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

    function obtenerGenero($genero){
        $query = $this->db->prepare('SELECT * FROM generos WHERE Id_genero = ?');
        $query -> execute(array($genero));
        $genre=$query->fetchAll(PDO::FETCH_OBJ);

        return $genre;
    }

    function agregarGenero($genero){
        $query = $this->db->prepare("INSERT INTO generos (nombre) VALUE (?)");
        $query->execute(array($genero));
    }

    function eliminarGenero($idGenero){
        $query = $this->db->prepare("DELETE FROM generos WHERE Id_genero=?");
        $query->execute(array($idGenero));
    }
    function editarGenero($genero, $idGenero){
        $query = $this->db->prepare("UPDATE generos SET nombre = ? WHERE Id_genero = ?");
        $query->execute(array($genero, $idGenero));
    }
}