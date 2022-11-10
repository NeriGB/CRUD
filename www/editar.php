<?php
    require 'db.php';
    $id = $_POST['id'];
    $nombre = $_POST["Nombre"];
    $ApellidoM = $_POST["ApellidoM"];
    $ApellidoP = $_POST["ApellidoP"];

    $editar = "UPDATE Usuarios SET Nombre='$nombre', ApellidoM='$ApellidoM', ApellidoP='$ApellidoP' WHERE idUsuario='$id'";
    $resultado = mysqli_query($con, $editar);

    if($resultado === TRUE)
    {
        header("location:../index.php");
    }
    else
    {
        echo "USUARIO NO ACTUALIZADO";
    }

    $row = mysqli_fetch_assoc($resultado);
?>