<?php
    include 'Conexion.php'; 

         $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $clinica = $_POST['Clinica'];
        $seguro = $_POST['Seguro'];
        $nacimiento = $_POST['Nacimiento'];
        $dirrecion = $_POST['Dirrecion'];
        $cp = $_POST['CP'];
        $telefono = $_POST['Telefono'];


        $consulta = mysqli_query($conexion, "insert into datos values('$nombre','$apellido', $clinica, $seguro,'$nacimiento','$dirrecion', $cp, $telefono)");
    

        if ($consulta) {
            echo 'Registro Agregado';
        }
        else {
            echo 'Error buelva a intentar';
        }

?>