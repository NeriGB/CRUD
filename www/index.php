<?php
    require 'db.php';
    //include("db.php");
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
            <h1 class="text-center">Usuarios</h1>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Mateno</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                        <?php $resultado = mysqli_query($con, $usuarios);
                        while($row = mysqli_fetch_assoc($resultado)) { ?>
                        <tr>
                            <th scope="row"><?php echo $row["idUsuario"]; ?></th>
                            <th scope="row"><?php echo $row["Nombre"]; ?></th>
                            <th scope="row"><?php echo $row["ApellidoM"]; ?></th>
                            <th scope="row"><?php echo $row["ApellidoP"]; ?></th>
                            <th>
                                <a href="editarUsuario.php?id=<?php echo $row['idUsuario'] ?>" class="btn btn-warning">Editar</a>
                                <a href="eliminarUsuario.php?id=<?php echo $row['idUsuario'] ?>" class="btn btn-danger">Eliminar</a>
                            </th>
                        </tr>
                        
                        <?php } mysqli_free_result($resultado); ?>
                </tbody>
            </table>
        </div>
        <div class="row-4 text-center">
            <a href="./agregar.php" class="btn btn-success">Agregar Usuario</a>
        </div>
    </div>
</body>
</html>

