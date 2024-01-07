<?php

include 'conexion.php';


/*if(!empty('buton')){


    $user = $_POST['nombre'];
    $clave = $_POST['password'];

    $buscar_user = mysqli_query($conexion, "SELECT * FROM register WHERE emai ='$user'");
    $buscar_clave = mysqli_query($conexion, "SELECT * FROM register WHERE contraseña = '$clave'");


    if(mysqli_num_rows($buscar_user) == 0){
        echo '<div class = "past_1" >correo incorrecto</div>
        <style>#user{border-color:red;}</style>
        ';     
    }if(mysqli_num_rows($buscar_clave) == 0){
        echo '<div class = "past_1">contraseña incorrecta</div>
        <style>#clave{border-color:red;}</style>
        '; 
    
    }if(mysqli_num_rows($buscar_user) > 0 and (mysqli_num_rows($buscar_clave) > 0) ){
        echo '<script>window.location.replace ("inicio.php") </script>';
    
    
}
}
*/
session_start();
if (!empty(['buton'])){
    if(!empty($_POST["nombre"]) and !empty($_POST["password"])){
        $usuario = $_POST['nombre'];
        $clave = $_POST['password'];
        $buscar_clave = mysqli_query($conexion, "SELECT * FROM register WHERE contraseña = '$clave'");
        $buscar_user = mysqli_query($conexion, "SELECT * FROM register WHERE emai = '$usuario'");
        $buscar = mysqli_query($conexion, "SELECT * FROM register WHERE emai = '$usuario' and contraseña = '$clave' ");
        if ($datos = $buscar-> fetch_object()) {
            $_SESSION["id"] = $datos-> id_register;
            $_SESSION["nombres"] = $datos-> nombre;
            $_SESSION["pasww"] = $datos -> contraseña;
            header("location: inicio.php");
        }if(mysqli_num_rows($buscar_user) == 0 ) {
            echo '<div class = "past_1">correo incorrecta</div>
            <style>#user{border-color:red;}</style>
            ';  
        }if(mysqli_num_rows($buscar_clave) == 0) {
            echo '<div class = "past_1">contraseña incorrecta</div>
            <style>#clave{border-color:red;}</style>
            ';  
        }
    }

}else{
        echo '<div class = "past_1">Error</div>';
}


?>