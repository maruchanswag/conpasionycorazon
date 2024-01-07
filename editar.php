<?php 

include 'conexion.php';


if(!empty('edit')) {
    if(!empty($_POST['edit_nombre'])){
        $edit = $_POST['edit_nombre'];
        $id = $_SESSION["id"];
        $editar = "UPDATE register SET nombre = '$edit' WHERE id_register = '$id' ";
        $ejecutar = mysqli_query($conexion, $editar);
        $nombre_new = mysqli_query($conexion, "SELECT * FROM register WHERE nombre = '$edit' ");
            if(mysqli_num_rows($nombre_new) > 0){
                $_SESSION["nombres"] = $edit;
                header('Location: perfil.php');
            
            }
    }
     
}

if(!empty('edit')){
    if(!empty($_POST['edit_clave'])  and !empty($_POST['edit_clave_new']) ){
        $cla = $_POST['edit_clave'];
        $cla_new = $_POST['edit_clave_new'];
        $pasw = $_SESSION["pasww"];
        $burcar_clave = mysqli_query($conexion, "SELECT * FROM register WHERE contraseña = '$cla' ");
        $edit_clave = "UPDATE register SET contraseña = '$cla_new' WHERE id_register = '$id' ";
            if($pasw == $cla){
                mysqli_query($conexion, $edit_clave);
                $_SESSION["pasww"] = $cla_new;
            }else{
                echo '<script>alert("incorrecto")</script>';
            }
    }
}


?>