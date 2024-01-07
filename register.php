<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
    
 <div class="regis_1"> 
 <form action="" method="post">  
    <a href="login.php"><i class="fa-sharp fa-solid fa-arrow-left" style="color: black;"></i></a>
    <div class="register">
        <h2>REGISTER</h2>
    
        <?php
     

     include 'conexion.php';
     include 'registrarse.php';
     

       
    

        ?>
  
        <label for="nombre" >nombre </label>
        <input type="text" id="nombre" name="user" required >
        <label for="apellido">apellido</label>
        <input type="text" id="apellido" name="apelli" required>
        <label for="email">correo</label>
        <input type="email" id="email"  name="gmail" required>
        <label for="clave_1">contraseña</label>
        <input type="password" id="clave_1" name="password_1" required>
        <label for="clave_2">confirmar contraseña</label>
        <input type="password" id="clave_2" name="password_2" required>
        <input type="submit"   id="boton" name="button" value="register"> 
       
        <a href="index.php"><img src="google.png" alt=""><h2>registrarse con google</h2></i></a>
        
        
    </div>
</form>  
</div>   
  



</body>
</html>