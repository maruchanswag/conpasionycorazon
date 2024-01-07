<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="contenedor">
        <div class="cont_1">
            <div class="img">
                <img src="login_1.webp" alt="">
            </div>
                <div class="form_login">
                    <form action="" method="post">
                        <img src="login.png" alt="">
                        <h2>login <i class="fa-sharp fa-solid fa-arrow-left" style="color: black;"></i></h2>
                        <?php
                            include 'conexion.php';
                            include 'loginn.php';
                        ?>
                        <label for="user"  >correo</label>
                        <input type="text" id="user" name="nombre" required>
                        <label for="clave">contraseña</label>
                        <input type="password" id="clave" name="password" required>
                        <button type="submit" id="buton">ENTRAR</button>
                        <a href="register.php" class="rg">REGISTER</a>
                    </form>    
            </div>
        </div>
    </div>
    
</body>
</html>