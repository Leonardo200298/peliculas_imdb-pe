<?php

class UserModel{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_peliculas_pe;charset=utf8', 'root', '');

    }

    public function conseguirUsuarioPorMail($email){
        $query= $this->db->prepare('SELECT * FROM usuario WHERE mail = ?');
        $query->execute([$email]);
        $usuarioEmail =  $query->fetch(PDO::FETCH_OBJ);
        return $usuarioEmail;
    }
}