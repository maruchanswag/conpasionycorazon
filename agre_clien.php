
<?php

include 'conexion_2.php';

if(!empty('agre_cliente')){
    if(!empty($_POST["nombre_cliente"]) and !empty($_POST["apellido_cliente"]) and !empty($_POST["fecha_cliente"]) and !empty($_POST["pago_cliente"]) ){
        $ncliente = $_POST['nombre_cliente'];
        $acliente = $_POST['apellido_cliente'];
        $fcliente = $_POST['fecha_cliente'];
        $pcliente = $_POST['pago_cliente'];

        $insetar = "INSERT INTO cliente (nombre, apellido, fecha, pago) VALUE ('$ncliente','$acliente','$fcliente', '$pcliente')";
        mysqli_query($conexion, $insetar);
        
        echo '<div class="agregado">Agregado</div>';
       
       
    }
}




?>