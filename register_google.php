<?php

include 'conexion.php';





if(!empty(['log'])){
    if(!empty($_POST["clave_google"])){
         $password_google = $_POST['clave_google'];
         $nombre_google = $_SESSION["user_first_name"];
         $email_google = $_SESSION["user_email_address"];
     
     $verificar_google = mysqli_query ($conexion, "SELECT * FROM register WHERE emai = '$email_google'");
     $insert_google = ("INSERT INTO register (nombre, emai, contraseña) VALUES ('$nombre_google', '$email_google', '$password_google') ");


     if(mysqli_num_rows($verificar_google) == 0 ){
         $ejecutar = mysqli_query($conexion, $insert_google);
         
         $_SESSION["id"] = 0.1 ;
         $_SESSION["nombres"] = $nombre_google;
         $_SESSION["pasww"] = $password_google;
         header("location: inicio.php");
        }if(mysqli_num_rows($verificar_google) > 0 ){
            echo 'esta cuenta ya esta registrada';
        }
    }    
 
 
 }


?>