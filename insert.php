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


        //RECUPERAR DATOS
        $nombre = $_POST['name'];
        $edad = $_POST['edad'];
        /* echo $nombre; */

       
/*     var_dump($nombre);
    var_dump($edad); */
        $alu=new Alumno(null,$nombre,$edad);
        /* echo $alu->nombre; */
        /* var_dump($alu); */
        
        // $stmt=$pdo->prepare("INSERT INTO tbl_alumno (`nombre`, `edad`) VALUES (?,?);");
        // $stmt->bindParam(1, $alu->nombre);
        // $stmt->bindParam(2, $alu->edad);
        
        // $stmt=$pdo->prepare("INSERT INTO tbl_alumno (id,`nombre`, `edad`) VALUES (:nombre,:edad);");
        // $stmt->bindParam(':nombre', $alu->nombre);
        // $stmt->bindParam(':edad', $alu->edad);

        $stmt = $pdo->prepare("INSERT INTO tbl_alumnos (id, nombre, edad) VALUES (:id, :nombre, :edad)");
        $stmt->execute((array)$alu);
        /* var_dump((array)$alu); */
    ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function aviso(url) {
            Swal.fire({
                    title: 'Usuario creado',
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