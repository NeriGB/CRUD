<?php
    require 'db.php';

    $nombre = $_POST["Nombre"];
    $ApellidoM = $_POST["ApellidoM"];
    $ApellidoP = $_POST["ApellidoP"];

    $insertar = "INSERT INTO `Usuarios` (`idUsuario`, `Nombre`, `ApellidoM`, `ApellidoP`) 
                    VALUES (NULL, '$nombre', '$ApellidoM', '$ApellidoP')";
    $resultado = mysqli_query($con, $insertar);

    if($resultado === TRUE)
    {
        header("location:../index.php");
    }
    else
    {
        echo "DATOS NO INGRESADOS";
    }

    //mysqli_free_result($resultado);
?>