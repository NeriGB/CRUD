<?php
    require 'db.php';
    $id = $_REQUEST['id'];

    $eliminar = "DELETE FROM Usuarios WHERE idUsuario = '$id'";
    $resultado = mysqli_query($con, $eliminar);

    if($resultado === TRUE)
    {
        header("location:../index.php");
    }
    else
    {
        echo "USUARIO NO ELIMINADO";
    }

    $row = mysqli_fetch_assoc($resultado);
?>