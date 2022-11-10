<?php
    
    $server = 'dbexpo.cew3eqxtgfv1.us-east-1.rds.amazonaws.com';
    $username = 'admin';
    $password = '123456789';
    $database = 'EjemploRDS';
    /*
    $server = 'db';
    $username = 'root';
    $password = 'aaaa';
    $database = 'EjemploRDS';
    */
    $con=new mysqli($server,$username,$password,$database);

    if($con->conect_errno){
        die('CONECCION FALLIDA'.$con->connect_error);
    }
    //echo "CONECION EXITOSA";
?>