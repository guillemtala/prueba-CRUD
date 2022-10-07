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
    <form action="crearController.php" method="post">
        <label for="fname">Nombre</label>
        <input type="text" name="name"><br><br>
        <label for="lname">Edad</label>
        <input type="number" name="edad"><br><br>
        <input type="submit" class="btn btn-info" value="Enviar">
    </form>
</body>
</html>
