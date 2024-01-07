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


<?php

            include 'conexion_2.php';

            

            

           
            $id = $_GET['id'];     
            $ed_cl = "SELECT * FROM cliente WHERE id_cliente ='$id'";
            $ejecut = mysqli_query($conexion, $ed_cl);

            $filas = mysqli_fetch_assoc($ejecut);
                $nombre = $filas['nombre'];
                $apellido = $filas['apellido'];
                $fecha = $filas['fecha'];
                $pago = $filas['pago'];
                 
        ?>



<div class="conter" >
<div class="conter_1" >
<form action=""  method="post" class="form_1" >
        <h2 class="tc" >
        Editar Clientes
        </h2>
    <div class="con_cliente" >
    <div class="cnt" > 
    <label for="n">Nombre</label>
    <input type="text"  id="n" name="no" value="<?php echo $nombre  ?>">
    </div>
    <div class="cnt" >         
    <label for="a">Apellido</label>
    <input type="text"  id="a" name="ap" value="<?php echo $apellido ?>">
    </div>   
    <div class="cnt" >
    <label for="f">Fecha</label>
    <input type="date"  id="f" name="fc" value="<?php echo $fecha ?>">
    </div>
    <div class="cnt" >      
    <label for="p">pago</label>
    <input type="text"  id="p" name="pg" value="<?php echo $pago ?>">
    <div class="cnt" ></div>   
    <div class="botones">
    <a href="inicio.php" class="cancel">Cancelar</a>
    <button id="EDIT_CLIENTES">Editar</button>
    </div>
</form>
</div>
</div>


</body>
</html>