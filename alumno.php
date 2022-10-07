<?php

class Alumno{
    public $id;
    public $nombre;
    public $edad;

    public function __construct($id, $nombre, $edad){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->edad=$edad;
    }
    /* Te devuelve a todos los alumnos y no le pasa ningun parametro */
    public static function getAlumnos(){
        require_once 'config.php';
        require_once 'conexion.php';

        $sentencia= $pdo->prepare("SELECT * FROM tbl_alumnos");
        $sentencia->execute();
        $listaAlumnos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $listaAlumnos;
    }





}