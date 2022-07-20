<?php
    include 'Conexion.php'; 

        $seguro = $_POST['Seguro'];
        

        $sentencia = "select * from datos where Seguro=$seguro";
        
        $consulta = mysqli_query($conexion, $sentencia);

        if($consulta->num_rows > 0) {
            echo "Ingresaste Correctamente";
        }
        else {
            echo "Error";
        }
?>