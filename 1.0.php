<?php
include 'conexion_2.php';


if(isset($_POST['EDITARR'])){
    if(!empty($_POST['nombre']) and !empty($_POST['apellido']) and !empty($_POST['fecha']) and !empty($_POST['pago'])){
    $nombre_new = $_POST['nombre'];
    $apellido_new = $_POST['apellido'];
    $fecha_new = $_POST['fecha'];
    $pago_new = $_POST['pago'];

    $SQLL = "UPDATE cliente SET nombre = '$nombre_new', apellido = '$apellido_new', fecha = '$fecha_new', pago = '$pago_new'  WHERE id_cliente = '$id'";
    $tll = mysqli_query($conexion, $SQLL);
    $nombre = $nombre_new;
    $apellido = $apellido_new;
    $fecha = $fecha_new;
    $pago =  $pago_new;

    
    echo' <div class="EDID" >Editado Exitosamente </div>  ';
  }else{
    echo '<div class="CC" >Campos vacios</div> ';

  }


  }
if(isset($_POST['CANCEL'])){
header("Location:inicio.php");
}  

?>