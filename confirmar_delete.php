<?php

include 'conexion_2.php';
include 'inicio.php';
 
    $id = $_GET['id'];

    $delete = "DELETE FROM cliente WHERE id_cliente ='" .$id."'";
    $resul = mysqli_query($conexion, $delete);
    header("Location: inicio.php");
    

    

?>