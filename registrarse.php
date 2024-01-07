<?php

include 'conexion.php';

if(!empty($_POST['button'])){


    $user = $_POST['user'];
    $correo = $_POST['gmail'];
    $paswoord = $_POST['password_1'];
    $confirmar = $_POST['password_2'];
    
    $enviar = "INSERT INTO register (nombre, emai, contraseña) 
    VALUES ('$user ', '$correo' ,'$paswoord')";
    
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM register WHERE emai = '$correo' ");
    
    
    if ($paswoord == $confirmar){

    }else{
        echo '<div class="cont_5" >claves no coinciden</div>
        <style>#clave_2{border-color:red;}</style> 
        ';
    }


    


    if (mysqli_num_rows($verificar_correo) > 0){
           
         echo '<div class="cont_5" >correo registrado</div>
         <style>#email{border-color:red;}</style>  
         ';
       

    }if(mysqli_num_rows($verificar_correo) == 0 and $paswoord == $confirmar  ){
        echo '<div class="cont_6" >registrado existosamente</div>
        <div class = "cont_7" ><a href="login.php">volver</a> </div>
        ';
        $ejecutar = mysqli_query($conexion, $enviar);
        exit();
    
    }


}



?>