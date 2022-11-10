<?php
    //require 'db.php';
    include("db.php");
    $usuarios = "SELECT * FROM Usuarios";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Ejemplo RDS</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Agregar Usuarios</h1>
        </div>
        <div class="row">
            <form action="./insertar.php" method="post" >
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="Nombre">
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" name="ApellidoM">
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" name="ApellidoP">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    <a href="./index.php" class="btn btn-dark">Regresar</a>
                </div>
            </form>
        </div>
        
    </div>
    

</body>
</html>