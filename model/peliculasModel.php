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
        return $peliculas;
    }
    function detallesDePelicula($id){
        $query = $this->db->prepare('SELECT * FROM peliculas WHERE id_peliculas = ?');
        $query->execute([$id]);
        $movieDetail=$query->fetchAll(PDO::FETCH_OBJ);
        foreach ($movieDetail as $detalle) {
            $query = $this->db->prepare('SELECT * FROM generos WHERE id_genero = ?');
            $query->execute([$detalle->id_genero]);
            $genero = $query->fetch(PDO::FETCH_OBJ);
            $detalle->id_genero=$genero->genero;
        }
        return $movieDetail;
    }
    function peliculasConEseGenero($id){
        $query = $this->db->prepare('SELECT * FROM peliculas WHERE id_genero = ?');
        $query->execute([$id]);
        $genreMovies=$query->fetchAll(PDO::FETCH_OBJ);
        return $genreMovies;
    }

    //Funciones de admin

    function eliminarPelicula($id){
        $query = $this->db->prepare("DELETE FROM peliculas WHERE id_peliculas = ?");
        $query->execute([$id]);
    }

  
    function editarPelicula($nombre,$fechaDeLanzamiento,$costoDeProduccion,$recaudacion,$id_peliculas){
        $query = $this->db->prepare("UPDATE peliculas SET nombre = ?, anio = ?, produccion = ?, recaudacion=? WHERE id_peliculas = ?");
        $query->execute(array($nombre,$fechaDeLanzamiento,$costoDeProduccion,$recaudacion,$id_peliculas));
    }

    function agregarPeliculaAlaDB($nombre,$fechaDeLanzamiento,$costoDeProduccion,$recaudacion,$genero){
        $query = $this->db->prepare("INSERT INTO peliculas (nombre, anio, produccion, recaudacion, id_genero) VALUES (?, ?, ?, ?, ?)");

        $query->execute([$nombre,$fechaDeLanzamiento,$costoDeProduccion,$recaudacion,$genero]);
      

    }
    
}