<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e0b63cee0f.js" crossorigin="anonymous"></script>
    
    <title>Document</title>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    img{
        width: 1.5vw;
    }
    </style>
</head>
<body>
<?php

/* require_once 'leer.php'; */

require_once 'alumno.php';

    /* $alu=new Alumno(null,'Fantasma',56); */
    $listaAlumnos=Alumno::getAlumnos();

    echo '<a href="./crearvista.php" class="btn btn-success btn-lg" role="button" aria-disabled="true">Crear</a>';
    echo '<table>';
    echo '<tr>';
    /* echo '<th>ID</th>'; */
    echo '<th>Nombre</th>';
    echo '<th>Edad</th>';
    echo '<th>Borrar</th>';
    echo '<th>Modificar</th>';
    echo '</tr>';
    foreach ($listaAlumnos as $alumno) {
        echo '<tr>';
        /* echo "<td>{$alumno['id']}</td>"; */
        echo "<td>{$alumno['nombre']}</td>";
        echo "<td>{$alumno['edad']}</td>";
        

        /* echo "<td><a type='button' class='btn btn-primary' href='actualizar.php?id={$alumno['id']}'>Actualizar</a></td>"; */
        /* echo "<td><a type='button' class='btn btn-danger' href='eliminarController.php?id={$alumno['id']}'>Eliminar</a></td>"; */
        ?>
        <td><button type="button" class="btn btn-danger" onClick="aviso('eliminarController.php?id=<?php echo $alumno['id']; ?>')" >Eliminar</button></td>                
        <td><button class="btn btn-primary" onClick="aviso('actualizarvista.php?id=<?php echo $alumno['id']; ?>')" >Modificar</button></td>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        
        
                       
        </tr>
        <?php
    }
    echo '</table>';
    ?>

    <script>

        function aviso(url) {
            Swal.fire({
                title: '¿Estas seguro?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
                })
        }

    </script>


</body>
</html>

