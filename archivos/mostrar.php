<?php 
	include 'Conexion.php';

	$seg = $_GET['Seguro'];

	$sentencia = "select * from datos where Seguro='$seg'";
	
	$resultado = $conexion -> query($sentencia);

	while($fila = $resultado->fetch_array()) {
		$usuario[] = array_map('utf8_encode', $fila);
	}

	echo json_encode($usuario);

	$resultado -> close();
 ?>