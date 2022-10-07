<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>

    <?php

require_once 'config.php';
require_once 'conexion.php';
require_once 'alumno.php';

$id=$_POST['id'];
$nombre=$_POST['name'];
$edad=$_POST['edad'];

/* echo $id; */

// $sql="DELETE FROM tbl_alumnos WHERE $id=?";
$stmt=$pdo->prepare("UPDATE tbl_alumnos SET nombre=?,edad=? WHERE id=?");

$stmt->bindParam(1,$nombre);
$stmt->bindParam(2,$edad);
$stmt->bindParam(3,$id);
$stmt->execute();










?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function aviso(url) {
        swal.fire ({
            title: 'Usuario borrado',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Volver'
        })
        .then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        })
    }

    aviso('./vista.php');
</script>
</body>
</html>