<?php

class comentModel{
    private $db;

    public function __construct()
    {
        $this->db=new PDO('mysql:host=localhost;'.'dbname=comentarios;charset=utf8', 'root', '');
    }

    function getComent(){
        $consulta='SELECT * FROM `coment_anonimos`';
        $query = $this->db->prepare($consulta);
        $query->execute();
        $comentarios = $query->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }
    function btnAddComent($comentario){
        $consulta = 'INSERT INTO coment_anonimos (comentario) VALUE = ?';
        $query = $this->db->prepare($consulta);
        $query->execute([$comentario]);
    } 
}