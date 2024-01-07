<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>


<?php include 'conexion_2.php'; ?>

<?php           
        
            $id = $_GET['id'];     
            $ed_cl = "SELECT * FROM cliente WHERE id_cliente ='$id'";
            $ejecut = mysqli_query($conexion, $ed_cl);

            $filas = mysqli_fetch_assoc($ejecut);
                $nombre = $filas['nombre'];
                $apellido = $filas['apellido'];
                $fecha = $filas['fecha'];
                $pago = $filas['pago'];
          
                 
        ?>

       
<body>

<div class="CAJA_EDT">

    <form action="" method="post" class="CAJA_EDT1">
        <a href="">aa</a>
    <h2>Editar Clientes</h2>
    <?php include '1.0.php' ?>
    <label for="NB">Nombre</label>
    <input type="text" id="NB" name="nombre" value="<?php echo $nombre ?>">
    <label for="AP">Apellido</label>
    <input type="text" id="AP" name="apellido" value="<?php echo $apellido ?>">
    <label for="FH">Fecha</label>
    <input type="text" id="FH" name="fecha" value="<?php echo $fecha ?>">
    <label for="PG">Pago</label>
    <input type="text" id="PG" name="pago" value="<?php echo $pago ?>">
    <div class="BOTON">
        <button name="CANCEL" style="color:white; background:red; " >Cancelar</button>
     <button name="EDITARR" style="color:white; background:blue; ">Editar</button>
    
    </div>
    

    </form>
</div>    
</body>
</html>