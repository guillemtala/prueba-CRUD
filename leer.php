<?php

require_once 'conexion.php';

$sentencia= $pdo->prepare("SELECT * FROM tbl_alumnos");
$sentencia->execute();
$listaAlumnos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

/* print_r($listaAlumnos);
echo '<br>';

var_dump($listaAlumnos); */