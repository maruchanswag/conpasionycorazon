<?php
session_start();
if(empty($_SESSION["id"])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <script> function confirmar(){
  return confirm('¿Estas seguro de eliminar los datos?');
}</script>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<?php
  include 'conexion_2.php';
?>
<header class="perf" >
    <div class="nav_perf" >
        <ul><li><a href="perfil.php">Perfil</a></li></ul>
        <ul><li><a href="cerrar.php">Salir</a></li></ul>
    </div>
    <i class="fa-regular fa-circle-user" id="pef_user" style="color: white;"></i>
</header>


<div class="bus_cant">      
    <div class="buscar"   >
      <form action="" method="post">
        <input type="text"  name="buscar" id="buscar" placeholder="   Buscar">
        <button id="buscar_c">Buscar</button>
      </form>  
    </div>
    
    <div class="cantidad">
         <?php
            $contar = "SELECT * FROM cliente";
            $tres = mysqli_query($conexion, $contar);
            $count = mysqli_num_rows($tres);
            echo 'Cantidad De CLientes ('.$count.')';
            ?>   
    </div>
</div>

<div class="agregar">
    <div class="for_cliente">
        <form action="" method="post">
        <?php
            include 'conexion.php';
            include 'conexion_2.php';
            include 'editar.php';
            
        ?>
            <h2>Clientes</h2>
        <?php
            include 'agre_clien.php';
        ?>    
            <label for="nc">Nombre</label>
            <input type="text" class="ct" id="nc" name="nombre_cliente" required>
            <label for="ac">Apellido</label>
            <input type="text" id="ac"  class="ct"name="apellido_cliente" required>
            <label for="fc">Fecha</label>
            <input type="date" id="fc" class="ct" name="fecha_cliente" required>
            <label for="pc">Pago</label>
            <input type="text" id="pc" class="ct" name="pago_cliente" required>
            <button id="agre_cliente">Agregar</button>
        </form>
    </div>

    
    <div class="for_table">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Pago</th>
                    <th>Fecha</th>
                    <th>Accion</th>
                </tr>
            </thead> 
            <tbody>
            <?php
            $sentencia = "SELECT * FROM cliente";
            $total = mysqli_query($conexion, $sentencia); ?>

           <?php  while($fila = mysqli_fetch_assoc($total)) { ?>

            <tr class="no1">
              <td><?php echo $fila['id_cliente'] ?> </td>
              <td><?php echo $fila['nombre'] ?> </td>
              <td><?php echo $fila['apellido'] ?> </td>
              <td><?php echo $fila['pago'] ?> </td>
              <td><?php echo $fila['fecha'] ?> </td>
              <td> 
                
            
            <button type="button" class="btn btn-danger" id="ea"><?php echo"<a href='1.1.php?id=".$fila['id_cliente']." '
            >Editar</a>"; ?></button>            

            <button type="button" class="btn btn-danger" id="ex"><?php echo"<a href='eliminar.php?id=".$fila['id_cliente']." '
            onclick='return confirmar()' >ELIMINAR</a>"; ?></button>
                                        
                    
                    </td>
            </tr>
               
                
<?php } ?> 
         
                 
            <?php 
    if(!empty("buscar_c")){ 
    if(!empty($_POST['buscar'])){ 
        $bus = $_POST['buscar'];
        $sentencia = "SELECT * FROM cliente WHERE nombre = '$bus'";
            $total = mysqli_query($conexion, $sentencia);
            if(mysqli_num_rows($total) > 0) {
                echo '<style>.for_table table .no1{
                    display: none;
                    }
                    </style>';
                    echo '<style>
  
                      .agregar{
                        
                        margin-left: 100px;
                        }
                      </style>';
                echo '<a href="inicio.php"><button  style="display:flex; color: white; background: blue;
                padding: 8px 15px; border:none; border-radius:10px; margin-left: 50px;"> Limpiar</button></a>';
                while($fila = mysqli_fetch_assoc($total)){
                    echo '<tr class="no2">';    
                        echo '<td>'; echo $fila['id_cliente']; echo '</td>';
                        echo '<td>'; echo $fila['nombre']; echo '</td>';
                        echo '<td>'; echo $fila['apellido']; echo '</td>';
                        echo '<td>'; echo $fila['pago']; echo '</td>';
                        echo '<td>'; echo $fila['fecha']; echo '</td>';
                        echo '<td>'; echo" <a href='eliminar.php?id=".$fila['id_cliente']." ' 
                        onclick='return confirmar()'>Eliminar</a>
                        
                        <a href='1.1.php?id=".$fila['id_cliente'].  "' 
                        style='background:blue;'>Editar</a>"
                        ; echo '</td>';

                       


                echo '</tr>';
                
                 }    
                 
            }else{
        
                echo '<style>

                  .agregar{
                    
                    margin-left: 250px;
                    }
                  </style>';
                echo '<div class="cliente" style="margin-left: 50px;">cliente no encotrado</div>';
            }
        }
    }
    ?>       
            </tbody>
        </table>
    </div>


</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    
<script>
    document.getElementById("pef_user").addEventListener("click", menu_menu);
        function menu_menu(){
            document.querySelector(".nav_perf").classList.toggle("menu_menu")
        }
</script>

</body>
</html>