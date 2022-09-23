<?php
require_once 'config.php';
$servidor= "mysql:host=".SERVIDOR.";dbname=".BD;
/* echo $servidor; */

try{
    $pdo=new PDO($servidor,USUARIO,PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
    /* echo "<script>alert('Conexion establecida con exito')</script>"; */
}catch(Exception $e){
    echo $e->getMessage();
    echo "<script>alert('Error de conexion')</script>";
}
