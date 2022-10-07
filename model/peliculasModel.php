<?php
class peliculasModel{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_peliculas_pe;charset=utf8', 'root', '');
    }
    function obtenerPeliculasModel(){
        $query = $this->db->prepare('SELECT * FROM peliculas');
        $query -> execute();
        $peliculas = $query->fetchAll(PDO::FETCH_OBJ);
        foreach ($peliculas as $peli) {
            $query = $this->db->prepare('SELECT * FROM generos WHERE id_genero = ?');
            $query->execute([$peli->id_genero]);
            $genero = $query->fetch(PDO::FETCH_OBJ);
            $peli->id_genero=$genero->nombre;
        }
        var_dump($peliculas);
        return $peliculas;
    }
    function detallesDePelicula($id){
        $query = $this->db->prepare('SELECT * FROM peliculas WHERE id_peliculas = ?');
        $query->execute(array($id));
        $movieDetail=$query->fetchAll(PDO::FETCH_OBJ);
        return $movieDetail;
    }
    
}