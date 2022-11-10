<?php
    require 'db.php';
    $id = $_REQUEST['id'];

    $editar = "SELECT * FROM Usuarios WHERE idUsuario = '$id'";
    $resultado = mysqli_query($con, $editar);

    $row = mysqli_fetch_assoc($resultado);
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
            <h1 class="text-center">Editar Usuarios</h1>
        </div>
        <div class="row">
            <form action="./editar.php" method="post" >
                <input type="hidden" name="id" value="<?php echo $row["idUsuario"]; ?>">
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="Nombre" value="<?php echo $row["Nombre"]; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" name="ApellidoM" value="<?php echo $row["ApellidoM"]; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" name="ApellidoP" value="<?php echo $row["ApellidoP"]; ?>">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Editar</button>
                    <a href="./index.php" class="btn btn-dark">Regresar</a>
                </div>
            </form>
        </div>
        
    </div>
    

</body>
</html>