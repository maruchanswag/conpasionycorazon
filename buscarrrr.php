
<?php

include 'conexion_2.php';

if(!empty("buscar_c")){
        

            $clientess = $_POST['buscar'];
            $cb = "SELECT * FROM cliente WHERE = nombre = '$clientess'";
            $bcb = mysqli_query ($conexion, $cb);
            
           if ($count_results = mysqli_num_rows($bcb) > 0 ){


           }
        
        
    }

?>  

