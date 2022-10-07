<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
require_once 'config.php';
require_once 'conexion.php';
require_once 'alumno.php';

$id=$_GET['id'];
$stmt=$pdo->prepare("SELECT * FROM tbl_alumnos WHERE id=?");
$stmt->bindParam(1,$id);
$stmt->execute();

$alumno=$stmt->fetch(PDO::FETCH_ASSOC);
?>
    <form action="actualizarController.php" method="post">
        <label for="fname">Nombre</label>
        <input type="text" name="name" value="<?php echo $alumno['nombre']; ?>"><br><br>
        <label for="lname">Edad</label>
        <input type="number" name="edad" value="<?php echo $alumno['edad']; ?>"><br><br>
        <input type="hidden" name="id" value="<?php echo $alumno['id']; ?>">
        <input type="submit" class="btn btn-warning" value="Actualizar">
    </form>
</body>
</html>